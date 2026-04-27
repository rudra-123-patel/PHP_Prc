<?php
/* Smarty version 4.5.3, created on 2026-04-27 07:02:45
  from 'C:\wamp64\www\basic-prc\09_database\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69ef0a15b06ce6_91832989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d4eef6e874acbfa949c08d228aecea051ccbff' => 
    array (
      0 => 'C:\\wamp64\\www\\basic-prc\\09_database\\templates\\edit.tpl',
      1 => 1777273302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ef0a15b06ce6_91832989 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
        <a href="index.php" class="btn">Back to Contacts</a>
        <br><br>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
            <p><strong><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</strong></p>
        <?php }?>

        <form action="" method="post">
            <p>
                <label>Name:</label><br>
                <input type="text" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" required style="width:100%; padding:8px;">
            </p>

            <p>
                <label>Email:</label><br>
                <input type="email" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" required style="width:100%; padding:8px;">
            </p>

            <p>
                <label>Phone:</label><br>
                <input type="text" name="phone" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
" required style="width:100%; padding:8px;">
            </p>

            <button type="submit" class="btn">Update contact</button>
        </form>
    </div>
</body>
</html>
<?php }
}
