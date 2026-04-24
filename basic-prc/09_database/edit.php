<?php
$pdo = require "db.php";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

// Check if contact exists
if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$contact) {
        die("Contact not found!");
    }
} else {
    die("Invalid ID!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if ($name && $email && $phone) {
        $stmt = $pdo->prepare("UPDATE contacts SET name = :name, email = :email, phone = :phone WHERE id = :id");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':id' => $id
        ]);
        
        echo "Contact updated successfully.";
        // Update $contact array so the form reflects the new changes
        $contact['name'] = $name;
        $contact['email'] = $email;
        $contact['phone'] = $phone;
    } else {
        echo "invalid input please enter valid input";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <a href="index.php">Back to Contacts</a><br><br>
    
    <form action="" method="post">
        <label >Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($contact['name'] ?? ''); ?>">
        <br>

        <label >Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($contact['email'] ?? ''); ?>">
        <br>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($contact['phone'] ?? ''); ?>">
        <br>

        <button type="submit">Update contact</button>
    </form>
</body>
</html>
