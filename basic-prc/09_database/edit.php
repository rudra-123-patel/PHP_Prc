<?php
$pdo = require "db.php";
require_once 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$message = null;

// Check if contact exists
if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$contact) {
        die("Contact not found!");
    }
} else {
    die("Invalid ID!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if ($name && $email && $phone) {
        $stmt = $pdo->prepare("UPDATE contacts SET name = :name, email = :email, phone = :phone WHERE id = :id");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':id' => $id
        ]);
        
        $message = "Contact updated successfully.";
        $contact['name'] = $name;
        $contact['email'] = $email;
        $contact['phone'] = $phone;
    } else {
        $message = "invalid input please enter valid input";
    }
}

if ($message !== null) {
    $smarty->assign('message', $message);
}
$smarty->assign('contact', $contact);

$smarty->display('edit.tpl');
