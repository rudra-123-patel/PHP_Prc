<?php
/* Smarty version 4.5.3, created on 2026-04-21 11:24:45
  from 'C:\wamp64\www\my-app\templates\edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e75e7dab6bf1_71517502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae9117878e995fc89ac171dd452060b278031c9e' => 
    array (
      0 => 'C:\\wamp64\\www\\my-app\\templates\\edit_user.tpl',
      1 => 1776768746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e75e7dab6bf1_71517502 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <div>
        <h1>Edit User</h1>
        <form action="update_user.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">

            <lable>Name:</lable>
            <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
"></input>

            <lable>Email:</lable>
            <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"></input>

            <lable>Phone:</lable>
            <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
"></input>

            <button type="submit">Update User</button>
        </form>

        
    </div>
</body>
</html><?php }
}
