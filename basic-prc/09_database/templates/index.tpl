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
        <h1>Contacts</h1>
        
        {if isset($message)}
            <div class="alert alert-success">
                {$message}
            </div>
        {/if}

        <div class="header-actions">
            <a href="create.php" class="btn">Add New Contact</a>
        </div>

        {if $contacts|@count > 0}
            <ul class="contact-list">
                {foreach from=$contacts item=contact}
                    <li class="contact-item">
                        {if $contact.image}
                            <img src="{$contact.image|escape}" alt="{$contact.name|escape}" class="contact-avatar">
                        {else}
                            <div class="contact-avatar" style="background-color: #e4e4e7; display: flex; align-items: center; justify-content: center; color: #71717a; font-weight: 600; font-size: 18px;">
                                {$contact.name|substr:0:1|upper}
                            </div>
                        {/if}
                        
                        <div class="contact-info">
                            <div class="contact-name">{$contact.name|escape}</div>
                            <div class="contact-details">
                                {$contact.email|escape} &bull; {$contact.phone|escape}
                            </div>
                        </div>
                        
                        <div class="contact-actions">
                            <a href="edit.php?id={$contact.id}" class="btn btn-outline">Edit</a>
                            <a href="delete.php?id={$contact.id}" class="btn btn-danger">Delete</a>
                        </div>
                    </li>
                {/foreach}
            </ul>
        {else}
            <div class="empty-state">
                <p>No contacts found. Please add some!</p>
            </div>
        {/if}
    </div>
</body>
</html>
