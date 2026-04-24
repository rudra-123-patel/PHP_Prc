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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Edit Contact</h2>
    <a href="index.php" class="btn">Back to Contacts</a>
    <form action="" method="post">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($contact['name'] ?? ''); ?>" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($contact['email'] ?? ''); ?>" required>
        </div>

        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" value="<?php echo htmlspecialchars($contact['phone'] ?? ''); ?>" required>
        </div>

        <button type="submit" class="btn">Update Contact</button>
    </form>
</div>
</body>
</html>
