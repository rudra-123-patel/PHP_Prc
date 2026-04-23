<?php
/* Smarty version 4.5.3, created on 2026-04-21 10:22:02
  from 'C:\wamp64\www\my-app-2\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e74fca0d4168_95936588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a86efe2b1a60358e9e67e2b02754c0b2acf71d' => 
    array (
      0 => 'C:\\wamp64\\www\\my-app-2\\templates\\form.tpl',
      1 => 1776766921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e74fca0d4168_95936588 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>Basic To-Do App</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        form {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
        }

        input[type="text"] {
            flex: 1;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #667eea;
        }

        button {
            padding: 12px 30px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

      

        ul {
            list-style: none;
        }

        li {
            padding: 15px;
            background: #f8f9fa;
            margin-bottom: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s;
        }

        \

        a {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

    </style>
</head>

<body>
    <div class="container">
        <h2>My To-Do List</h2>

        <form action="index.php" method="POST">
            <input type="text" name="task_input" required placeholder="What needs to be done?">
            <button type="submit" name="add_btn">Add</button>
        </form>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_tasks']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['t']->value['task_name'];?>
 
                    <a href="index.php?delete_id=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">[X]</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</body>

</html>
<?php }
}
