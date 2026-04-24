<?php

$pdo = require "db.php";
// echo "hello from index php";
// var_dump($_SERVER,$_GET,$_POST);

$uploadDir = "uploads/";

// var_dump($_FILES);

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


        echo "Contact added: $name ($email,$phone)";

        }else{
            echo "Failed to upload image.";
        }

     
    }else{
        echo "invalid input please enter valid input";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Add New Contact</h2>
    <a href="index.php" class="btn">Back to Contacts</a>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" required>
        </div>

        <div class="form-group">
            <label>Image:</label>
            <input type="file" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="btn">Add Contact</button>
    </form>
</div>
</body>
</html>