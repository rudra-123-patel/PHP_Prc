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
        <h1>Edit Contact</h1>
        
        {if isset($message)}
            <div class="alert {if $message|strpos:'invalid' !== false}alert-danger{else}alert-success{/if}" style="{if $message|strpos:'invalid' !== false}background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca;{/if}">
                {$message}
            </div>
        {/if}

        <form action="" method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" value="{$contact.name|escape}" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" value="{$contact.email|escape}" required>
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" value="{$contact.phone|escape}" required>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 32px;">
                <button type="submit" class="btn" style="flex: 1;">Update Contact</button>
                <a href="index.php" class="btn btn-outline" style="flex: 1; text-align: center;">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
