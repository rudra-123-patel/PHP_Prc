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
s

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label >Name:</label>
        <input type="text" name="name" >
        <br>

        <label >Email:</label>
        <input type="email" name="email" >
        <br>

        <label>Phone:</label>
        <input type="text" name="phone" >
        <br>

        <label>Image:</label>
        <input type="file" name="image" accept="image/*" >
        <br>

        <button type="submit">Add contact</button>
    </form>
</body>
</html>