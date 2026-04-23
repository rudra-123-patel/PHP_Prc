<!DOCTYPE html>
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
            {foreach $my_tasks as $t}
                <li>
                    {$t.task_name} 
                    <a href="index.php?delete_id={$t.id}">[X]</a>
                </li>
            {/foreach}
        </ul>
    </div>
</body>

</html>
