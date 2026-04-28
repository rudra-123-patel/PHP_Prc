<?php
$conn = require "db.php";    

if(isset($_GET['id'])){
    $contactId = (int)$_GET['id'];

    // Get image to delete file
    $stmt = $conn->prepare("SELECT image FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $contactId);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if($result && $result['image'] && file_exists($result['image'])){
        unlink($result['image']);
    }

    // Delete record
    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $contactId);
    $stmt->execute();

    header("Location: index.php?msg=deleted");
    exit;
}