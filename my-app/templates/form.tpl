<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body { font-family: sans-serif; margin: 50px; background: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; }
        input { width: 100%; padding: 8px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; cursor: pointer; }
        .msg { color: green; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>Register User</h2>

{if isset($name)}
    <h1>{$name}</h1>
{/if}

 

    <form action="submit.php" method="post" enctype="multipart/form-data">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>Image:</lable>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit">Save to MySQL</button>
    </form>
</div>

    

</body>
</html>