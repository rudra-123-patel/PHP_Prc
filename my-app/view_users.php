<?php
session_start();
require('libs/Smarty.class.php');
require('db.php');

$smarty = new Smarty();
$smarty->registerPlugin("modifier", "base64_encode", "base64_encode");
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

// --- 1. Handle Delete Action ---
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
   

    $del = $conn->prepare("DELETE FROM users WHERE id = ?");
    $del->bind_param("i", $id);
    $del->execute();

    header("Location: view_users.php");
    exit();
}

// --- 2. Success Message (This clears when you refresh!) ---
if (isset($_SESSION['success_msg'])) {
    $smarty->assign('msg', $_SESSION['success_msg']);
    unset($_SESSION['success_msg']); // This is the secret to clearing on refresh
}

// --- 3. Fetch All Users ---
$result = $conn->query("SELECT * FROM users ORDER BY id DESC");
$all_users = [];
while ($row = $result->fetch_assoc()) {
    $all_users[] = $row;
}

$smarty->assign('users', $all_users);
$smarty->display('view_users.tpl');
?>