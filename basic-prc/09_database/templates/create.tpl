<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add New Contact</h1>
        <a href="index.php" class="btn">Back to Contacts</a>
        <br><br>

        {if isset($message)}
            <p><strong>{$message}</strong></p>
        {/if}

        <form action="create.php" method="post" enctype="multipart/form-data">
            <p>
                <label>Name:</label><br>
                <input type="text" name="name" required style="width:100%; padding:8px;">
            </p>

            <p>
                <label>Email:</label><br>
                <input type="email" name="email" required style="width:100%; padding:8px;">
            </p>

            <p>
                <label>Phone:</label><br>
                <input type="text" name="phone" required style="width:100%; padding:8px;">
            </p>

            <p>
                <label>Image:</label><br>
                <input type="file" name="image" accept="image/*" required>
            </p>

            <button type="submit" class="btn">Add contact</button>
        </form>
    </div>
</body>
</html>
