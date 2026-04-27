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
        <h1>Contacts List</h1>
        <a href="create.php" class="btn">Create a new contact</a>
        <br><br>

        {if $contacts|@count > 0}
            <ul style="padding: 0;">
                {foreach from=$contacts item=contact}
                    <li style="margin-bottom: 15px; list-style-type: none; padding: 15px; border: 1px solid #ddd; border-radius: 5px; background-color: #fafafa;">
                        {if $contact.image}
                            <img src="{$contact.image|escape}" height="50" style="vertical-align: middle; margin-right: 10px; border-radius: 50%;">
                        {/if}
                        <strong>{$contact.name|escape}</strong> - {$contact.email|escape} - {$contact.phone|escape}
                        
                        <div style="margin-top: 10px;">
                            <a href="edit.php?id={$contact.id}" class="btn" style="padding: 5px 10px; font-size: 12px;">Edit</a>
                            <a href="delete.php?id={$contact.id}" class="btn" style="padding: 5px 10px; font-size: 12px; background-color: #dc3545;">Delete</a>
                        </div>
                    </li>
                {/foreach}
            </ul>
        {else}
            <p>No contacts found. Please add some!</p>
        {/if}
    </div>
</body>
</html>
