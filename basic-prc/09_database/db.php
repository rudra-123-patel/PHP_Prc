<?php
try {
    $conn = new mysqli("localhost", "root", "", "contacts");

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE IF NOT EXISTS contacts (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT,
        image TEXT
    );";

    if ($conn->query($sql) === TRUE) {
        return $conn;
    } else {
        throw new Exception("Error creating table: " . $conn->error);
    }
} catch (Exception $e) {
    die("Database Error: " . $e->getMessage());
}