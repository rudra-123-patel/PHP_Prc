<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <div>
        <h1>Edit User</h1>
        <form action="update_user.php" method="post">
            <input type="hidden" name="id" value="{$user.id}">

            <lable>Name:</lable>
            <input type="text" name="username" value="{$user.name}"></input>

            <lable>Email:</lable>
            <input type="email" name="email" value="{$user.email}"></input>

            <lable>Phone:</lable>
            <input type="text" name="phone" value="{$user.phone}"></input>

            <button type="submit">Update User</button>
        </form>

        
    </div>
</body>
</html>