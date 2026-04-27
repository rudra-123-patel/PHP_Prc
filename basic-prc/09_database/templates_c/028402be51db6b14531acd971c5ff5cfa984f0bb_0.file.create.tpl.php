<?php
/* Smarty version 4.5.3, created on 2026-04-27 07:02:33
  from 'C:\wamp64\www\basic-prc\09_database\templates\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69ef0a0976bc87_79074354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028402be51db6b14531acd971c5ff5cfa984f0bb' => 
    array (
      0 => 'C:\\wamp64\\www\\basic-prc\\09_database\\templates\\create.tpl',
      1 => 1777273289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ef0a0976bc87_79074354 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

        <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
            <p><strong><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</strong></p>
        <?php }?>

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
<?php }
}
