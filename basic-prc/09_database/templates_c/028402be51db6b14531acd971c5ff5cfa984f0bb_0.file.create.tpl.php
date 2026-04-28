<?php
/* Smarty version 4.5.3, created on 2026-04-28 08:36:08
  from 'C:\wamp64\www\basic-prc\09_database\templates\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69f07178caceb8_27451779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028402be51db6b14531acd971c5ff5cfa984f0bb' => 
    array (
      0 => 'C:\\wamp64\\www\\basic-prc\\09_database\\templates\\create.tpl',
      1 => 1777365366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f07178caceb8_27451779 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add Contact</h1>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
            <div class="alert <?php if (strpos($_smarty_tpl->tpl_vars['message']->value,'Failed') !== false || strpos($_smarty_tpl->tpl_vars['message']->value,'invalid') !== false) {?>alert-danger<?php } else { ?>alert-success<?php }?>" style="<?php if (strpos($_smarty_tpl->tpl_vars['message']->value,'Failed') !== false || strpos($_smarty_tpl->tpl_vars['message']->value,'invalid') !== false) {?>background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca;<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
        <?php }?>

        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" required placeholder="John Doe">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required placeholder="john@example.com">
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" required placeholder="123-456-7890">
            </div>

            <div class="form-group">
                <label>Profile Image</label>
                <input type="file" name="image" accept="image/*" required>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 32px;">
                <button type="submit" class="btn" style="flex: 1;">Save Contact</button>
                <a href="index.php" class="btn btn-outline" style="flex: 1; text-align: center;">Go Back</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php }
}
