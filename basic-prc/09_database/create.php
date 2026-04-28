<?php
$conn = require "db.php";
require_once('smarty.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if($name && $email && $phone && isset($_FILES["image"])){
        $uploadDir = "uploads/";
        if(!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $imgName = time() . "_" . basename($_FILES["image"]["name"]);
        $imagePath = $uploadDir . $imgName;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)){
            // MySQLi Prepare
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, image) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $phone, $imagePath); // "ssss" means 4 strings
            $stmt->execute();
            
            $message = "Contact added successfully!";
        } else {
            $message = "Failed to upload image.";
        }
    } else {
        $message = "Invalid input.";
    }
    $smarty->assign('message', $message);
}
$smarty->display('create.tpl');