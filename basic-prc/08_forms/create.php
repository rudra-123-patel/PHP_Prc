<?php

// echo "hello from index php";
// var_dump($_SERVER,$_GET,$_POST);

$uploadDir = "uploads/";
$contactFile = "contact.json";

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
            $contacts = file_exists($contactFile) ? json_decode(file_get_contents($contactFile)):[];

             $contacts[]=[
                'id'=>rand(100000000,200000000),
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'image'=>$imagePath
        ];

        file_put_contents($contactFile,json_encode($contacts,JSON_PRETTY_PRINT));
        echo "Contact added: $name ($email,$phone)";

        }else{
            echo "Failed to upload image.";
        }

     
    }else{
        echo "invalid input";
    }
}


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