<?php

session_start();

require("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];
    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $stmt = $conn->prepare("UPDATE users SET name=?,email=?,phone=? WHERE id=?");
    $stmt->bind_param("sssi",$name,$email,$phone,$id);

    if($stmt->execute()){
        header("Location: view_users.php");
        exit(); 
    }
    else{
        echo "Database Error: " . $stmt->error;
    }


}

?>