<?php
/* Smarty version 4.5.3, created on 2026-04-28 05:55:42
  from 'C:\wamp64\www\basic-prc\09_database\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69f04bdeca1be1_71059297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b325535234ec5747620178368afc1fe4654efd' => 
    array (
      0 => 'C:\\wamp64\\www\\basic-prc\\09_database\\templates\\index.tpl',
      1 => 1777355707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f04bdeca1be1_71059297 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h1>Contacts</h1>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
            <div class="alert alert-success">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
        <?php }?>

        <div class="header-actions">
            <a href="create.php" class="btn">Add New Contact</a>
        </div>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['contacts']->value) > 0) {?>
            <ul class="contact-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                    <li class="contact-item">
                        <?php if ($_smarty_tpl->tpl_vars['contact']->value['image']) {?>
                            <img src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="contact-avatar">
                        <?php } else { ?>
                            <div class="contact-avatar" style="background-color: #e4e4e7; display: flex; align-items: center; justify-content: center; color: #71717a; font-weight: 600; font-size: 18px;">
                                <?php echo mb_strtoupper((string) substr((string) $_smarty_tpl->tpl_vars['contact']->value['name'], (int) 0, (int) 1) ?? '', 'UTF-8');?>

                            </div>
                        <?php }?>
                        
                        <div class="contact-info">
                            <div class="contact-name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="contact-details">
                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
 &bull; <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                        </div>
                        
                        <div class="contact-actions">
                            <a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="btn btn-outline">Edit</a>
                            <a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="btn btn-danger">Delete</a>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php } else { ?>
            <div class="empty-state">
                <p>No contacts found. Please add some!</p>
            </div>
        <?php }?>
    </div>
</body>
</html>
<?php }
}
