<?php
/* Smarty version 4.5.3, created on 2026-04-21 11:21:19
  from 'C:\wamp64\www\my-app\templates\view_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e75daf601919_38327210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd008603885bf50c199b6e877a96c305f875789ad' => 
    array (
      0 => 'C:\\wamp64\\www\\my-app\\templates\\view_users.tpl',
      1 => 1776770477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e75daf601919_38327210 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

    <?php if ((isset($_smarty_tpl->tpl_vars['msg']->value))) {?>
        <p style="color: green; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
    <?php }?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
            <tr>
<td>
    <?php if ($_smarty_tpl->tpl_vars['u']->value['image_path']) {?>
        <img src="data:image/jpeg;base64,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['u']->value['image_path'] ));?>
" alt="User">
    <?php } else { ?>
        <span>No Image</span>
    <?php }?>
</td>                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['phone'];?>
</td>
                <td>
                    <a href="view_users.php?delete_id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" 
                       class="del-btn" 
                       onclick="return confirm('Delete this user?')">Delete</a>
                       | 
                     <a href= "edit_user.php?id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"
                    class="edit-btn"
                    onclick="">Edit</a> 
                </td>
                

            </tr>
            <?php
}
if ($_smarty_tpl->tpl_vars['u']->do_else) {
?>
            <tr>
                <td colspan="5" style="text-align:center;">No users found.</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

</body>
</html><?php }
}
