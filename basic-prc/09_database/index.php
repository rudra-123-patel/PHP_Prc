<?php
$pdo = require 'db.php';
$contacts = [];

if ($pdo){
    // Query to fetch all contacts
    $stmt = $pdo->query("SELECT* FROM contacts");

    // Fetch all results as an associative array

    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);



}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Contact List</h2>
    <a href="create.php" class="btn">Create a new contact</a>

    <ul class="contact-list">
        <?php foreach($contacts as $contact): ?>
            <li class="contact-card">
                <div class="contact-info">
                    <img src="<?php echo htmlspecialchars($contact['image']); ?>" alt="Profile">
                    <div>
                        <strong><?php echo htmlspecialchars($contact['name']); ?></strong><br>
                        <?php echo htmlspecialchars($contact['email']); ?> - <?php echo htmlspecialchars($contact['phone']); ?>
                    </div>
                </div>
                <div class="contact-actions">
                    <a href="edit.php?id=<?php echo $contact['id'] ?>" class="btn">Edit</a>
                    <a href="delete.php?id=<?php echo $contact['id'] ?>" class="btn btn-danger">Delete</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>