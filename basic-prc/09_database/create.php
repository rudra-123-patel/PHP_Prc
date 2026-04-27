<?php

$pdo = require "db.php";
require_once 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');

$uploadDir = "uploads/";
$message = null;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = filter_input(
        INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS
    );

    $email = filter_input(
        INPUT_POST,"email",FILTER_SANITIZE_EMAIL
    );

    $phone = filter_input(
        INPUT_POST,"phone",FILTER_SANITIZE_NUMBER_INT
    );

    if($name && $email && $phone && isset($_FILES["image"])){

        if(!is_dir($uploadDir)){
            mkdir($uploadDir,0777, true);
        }

        $imgName = time()."_". basename($_FILES["image"]["name"]);
        $imagePath = $uploadDir . $imgName;

        if(move_uploaded_file($_FILES['image']['tmp_name'],$imagePath)){
           
            $stmt = $pdo->prepare("INSERT INTO contacts(name,email,phone,image) VALUES(:name,:email,:phone,:image)");

            $stmt->execute([
                ':name'=>$name,
                ':email'=>$email,
                ':phone'=>$phone,
                ':image'=>$imagePath
            ]);

            $message = "Contact added: $name ($email, $phone)";

        }else{
            $message = "Failed to upload image.";
        }
     
    }else{
        $message = "invalid input please enter valid input";
    }
}

if ($message !== null) {
    $smarty->assign('message', $message);
}

$smarty->display('create.tpl');