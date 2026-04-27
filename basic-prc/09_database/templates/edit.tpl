<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <div class="container">
        <h1>Edit Contact</h1>
        <a href="index.php" class="btn">Back to Contacts</a>
        <br><br>
        
        {if isset($message)}
            <p><strong>{$message}</strong></p>
        {/if}

        <form action="" method="post">
            <p>
                <label>Name:</label><br>
                <input type="text" name="name" value="{$contact.name|escape}" required style="width:100%; padding:8px;">
            </p>

            <p>
                <label>Email:</label><br>
                <input type="email" name="email" value="{$contact.email|escape}" required style="width:100%; padding:8px;">
            </p>

            <p>
                <label>Phone:</label><br>
                <input type="text" name="phone" value="{$contact.phone|escape}" required style="width:100%; padding:8px;">
            </p>

            <button type="submit" class="btn">Update contact</button>
        </form>
    </div>
</body>
</html>
