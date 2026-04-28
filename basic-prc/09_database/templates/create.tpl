<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add Contact</h1>
        
        {if isset($message)}
            <div class="alert {if $message|strpos:'Failed' !== false || $message|strpos:'invalid' !== false}alert-danger{else}alert-success{/if}" style="{if $message|strpos:'Failed' !== false || $message|strpos:'invalid' !== false}background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca;{/if}">
                {$message}
            </div>
        {/if}

        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" required placeholder="John Doe">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required placeholder="john@example.com">
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" required placeholder="123-456-7890">
            </div>

            <div class="form-group">
                <label>Profile Image</label>
                <input type="file" name="image" accept="image/*" required>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 32px;">
                <button type="submit" class="btn" style="flex: 1;">Save Contact</button>
                <a href="index.php" class="btn btn-outline" style="flex: 1; text-align: center;">Go Back</a>
            </div>
        </form>
    </div>
</body>
</html>
