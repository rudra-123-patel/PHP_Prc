<?php
$contactFile = "contact.json";
$contacts = file_exists($contactFile)? json_decode(file_get_contents($contactFile),true):[];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>
<body>
    <a href="create.php">Create a new contact</a>


<ul>
    <?php foreach($contacts as $contact): ?>

        <li>
            <img src="<?php echo $contact['image']; ?>" height="50">
            <?php echo "{$contact['name']}- {$contact['email']}-{$contact['phone']}";?>
        </li>
        <a href="delete.php?id=<?php echo $contact['id'] ?>">
            Delete
        </a>

    <?php endforeach;?>
</ul>


</body>
</html>