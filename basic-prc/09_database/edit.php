<?php
$conn = require "db.php";
// ... (Smarty setup)
require_once('smarty.php');


$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id) {
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $contact = $stmt->get_result()->fetch_assoc();

    if (!$contact) die("Contact not found!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    $stmt = $conn->prepare("UPDATE contacts SET name=?, email=?, phone=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $phone, $id);
    $stmt->execute();
    
    header("Location: index.php"); // Redirect after edit
    exit;
}

$smarty->assign('contact', $contact);
$smarty->display('edit.tpl');