<?php
/* Smarty version 4.5.3, created on 2026-04-27 09:30:41
  from 'C:\wamp64\www\basic-prc\09_database\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69ef2cc1bf7410_98047028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b325535234ec5747620178368afc1fe4654efd' => 
    array (
      0 => 'C:\\wamp64\\www\\basic-prc\\09_database\\templates\\index.tpl',
      1 => 1777282232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ef2cc1bf7410_98047028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\basic-prc\\09_database\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
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

        <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
            <p style="color: #155724; background-color: #d4edda; padding: 10px; border-radius: 5px; border: 1px solid #c3e6cb;">
                <strong><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</strong>
            </p>
        <?php }?>

        <a href="create.php" class="btn">Create a new contact</a>
        <br><br>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['contacts']->value) > 0) {?>
            <ul style="padding: 0;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                    <li style="margin-bottom: 15px; list-style-type: none; padding: 15px; border: 1px solid #ddd; border-radius: 5px; background-color: #fafafa;">
                        <?php if ($_smarty_tpl->tpl_vars['contact']->value['image']) {?>
                            <img src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" height="50" style="vertical-align: middle; margin-right: 10px; border-radius: 50%;">
                        <?php }?>
                        <strong><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong> - <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>

                        
                        <div style="margin-top: 10px;">
                            <a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="btn" style="padding: 5px 10px; font-size: 12px;">Edit</a>
                            <a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="btn" style="padding: 5px 10px; font-size: 12px; background-color: #dc3545;">Delete</a>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php } else { ?>
            <p>No contacts found. Please add some!</p>
        <?php }?>
    </div>
</body>
</html>
<?php }
}
