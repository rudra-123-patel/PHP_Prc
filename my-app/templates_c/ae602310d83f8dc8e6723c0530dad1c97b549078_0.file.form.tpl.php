<?php
/* Smarty version 4.5.3, created on 2026-04-21 11:58:55
  from 'C:\wamp64\www\my-app\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e7667fb86343_75949464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae602310d83f8dc8e6723c0530dad1c97b549078' => 
    array (
      0 => 'C:\\wamp64\\www\\my-app\\templates\\form.tpl',
      1 => 1776772735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e7667fb86343_75949464 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

<?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?>
    <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
<?php }?>

 

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
</html><?php }
}
