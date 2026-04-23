<?php

require('libs/Smarty.class.php');
require('db.php');


$smarty = new Smarty();
$smarty->setTemplateDir('templateds');
$smarty->setCompileDir('templates_c');

// 1. ADDING A TASK
if (isset($_POST['add_btn'])) {
    // Get the text from the input
    $item = $_POST['task_input'];
    
    // Clean it to prevent errors
    $safe_item = $db->real_escape_string($item);
    
    // Run the query - Make sure the quotes are exactly like this:
    $sql = "INSERT INTO tasks (task_name) VALUES ('$safe_item')";
    
    $db->query($sql);
    
    // Redirect back to index.php so the form doesn't resubmit if you refresh
    header("Location: index.php");
    exit();
}   
// DELETE TASK

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    $db->query(("DELETE FROM tasks WHERE id=$id"));
}

// READ TASKS

$result = $db->query("SELECT * FROM tasks");
$all_tasks = $result->fetch_all(MYSQLI_ASSOC); // Shortcut to get all rows


// Send data to Smarty
$smarty->assign('my_tasks', $all_tasks);
$smarty->display('templates/form.tpl');

?>