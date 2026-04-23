<?php
session_start(); // Add this at the top!
require('libs/Smarty.class.php');
require('db.php');
    
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

// Display the template
$smarty->display('form.tpl');
?>