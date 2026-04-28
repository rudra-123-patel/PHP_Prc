<?php
// Load the Smarty library
require_once('libs/Smarty.class.php'); 

$smarty = new Smarty();

// Set the paths for your project
$smarty->setTemplateDir(__DIR__ . '/templates/');
$smarty->setCompileDir(__DIR__ . '/templates_c/');


// You can also assign global variables here
?>
