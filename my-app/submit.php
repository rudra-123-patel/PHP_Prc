<?php
session_start();
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        
        $imageData = file_get_contents($_FILES["image"]["tmp_name"]);

        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, image_path) VALUES (?, ?, ?, ?)");
        
      
        $null = NULL; 
        $stmt->bind_param("sssb", $name, $email, $phone, $null);

        // sssb means string for name, email, phone and blob for image_path
        $stmt->send_long_data(3, $imageData); // 3 is the index of the image_path parameter

        if ($stmt->execute()) {
            $_SESSION['success_msg'] = "User registered and image saved to Database!";
            header("Location: view_users.php");
            exit();
        } else {
            echo "Database Error: " . $stmt->error;
        }
        $stmt->close();

    } else {
        echo "Please select a valid image file.";
    }

    $conn->close();
}
?>