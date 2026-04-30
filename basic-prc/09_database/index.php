<?php
$conn = require 'db.php'; 
require_once('smarty.php');


$contacts = [];

if ($conn) {
    $result = $conn->query("SELECT * FROM contacts");
    if ($result) {
        $contacts = $result->fetch_all(MYSQLI_ASSOC);
    }
}

$message = (isset($_GET['msg']) && $_GET['msg'] === 'deleted') ? "Contact deleted successfully." : null;

$smarty->assign('message', $message);
$smarty->assign('contacts', $contacts);
$smarty->display('index.tpl');