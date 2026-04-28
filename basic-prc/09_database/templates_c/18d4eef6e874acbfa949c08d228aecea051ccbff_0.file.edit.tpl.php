<?php
/* Smarty version 4.5.3, created on 2026-04-28 05:56:25
  from 'C:\wamp64\www\basic-prc\09_database\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69f04c09453557_43903372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d4eef6e874acbfa949c08d228aecea051ccbff' => 
    array (
      0 => 'C:\\wamp64\\www\\basic-prc\\09_database\\templates\\edit.tpl',
      1 => 1777355712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f04c09453557_43903372 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
            <div class="alert <?php if (strpos($_smarty_tpl->tpl_vars['message']->value,'invalid') !== false) {?>alert-danger<?php } else { ?>alert-success<?php }?>" style="<?php if (strpos($_smarty_tpl->tpl_vars['message']->value,'invalid') !== false) {?>background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca;<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
        <?php }?>

        <form action="" method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" required>
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
" required>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 32px;">
                <button type="submit" class="btn" style="flex: 1;">Update Contact</button>
                <a href="index.php" class="btn btn-outline" style="flex: 1; text-align: center;">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php }
}
