<?php

session_start();
require('libs/Smarty.class.php');
require('db.php');

$smarty = new Smarty();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $stmt=$conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $result = $stmt->get_result()->fetch_assoc();

    $smarty->assign('user',$result);
    $smarty->display('templates/edit_user.tpl');
    
}

    else{
    header("Location:view_users.php");
    exit();
}


?>
