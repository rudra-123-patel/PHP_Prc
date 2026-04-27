<?php
$pdo = require 'db.php';
require_once 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');

$contacts = [];

if ($pdo) {
    // Query to fetch all contacts
    $stmt = $pdo->query("SELECT * FROM contacts");

    // Fetch all results as an associative array
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$smarty->assign('contacts', $contacts);
$smarty->display('index.tpl');