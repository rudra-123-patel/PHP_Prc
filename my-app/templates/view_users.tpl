<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        body { font-family: sans-serif; margin: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #28a745; color: white; }
        img { width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 1px solid #ccc; }
        .del-btn { color: #dc3545; text-decoration: none; font-weight: bold; }
        .add-btn { background: #007bff; color: white; padding: 10px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

    <h1>Registered Users</h1>
    <a href="index.php" class="add-btn">+ Register New User</a>

    {if isset($msg)}
        <p style="color: green; font-weight: bold;">{$msg}</p>
    {/if}

    <table>
        <thead>
            <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users item=u}
            <tr>
<td>
    {if $u.image_path}
        <img src="data:image/jpeg;base64,{$u.image_path|base64_encode}" alt="User">
    {else}
        <span>No Image</span>
    {/if}
</td>                <td>{$u.name}</td>
                <td>{$u.email}</td>
                <td>{$u.phone}</td>
                <td>
                    <a href="view_users.php?delete_id={$u.id}" 
                       class="del-btn" 
                       onclick="return confirm('Delete this user?')">Delete</a>
                       | 
                     <a href= "edit_user.php?id={$u.id}"
                    class="edit-btn"
                    onclick="">Edit</a> 
                </td>
                

            </tr>
            {foreachelse}
            <tr>
                <td colspan="5" style="text-align:center;">No users found.</td>
            </tr>
            {/foreach}
        </tbody>
    </table>

</body>
</html>