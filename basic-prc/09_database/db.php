<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=contacts","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE TABLE IF NOT EXISTS contacts
    (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    phone TEXT,
    image TEXT
    );
    ");

    return $pdo;
    
}catch(PDOException $e){

    die("Connection failed: " . $e->getMessage());
// return null;
}
?>