<?php

session_start();

/*

session are a way to store info to be used across multiple pages
unlike cookies, session are stored on the server.

login for a single time 

*/




if(isset($_POST['submit'])){
   $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);

   
   $password = $_POST['password'];      

   if($username == "rudra" && $password == "password"){
    $_SESSION['username'] = $username;
    header('Location: extras/dashboard.php');
   }else{
        echo 'Incorrect login';
   }

}


?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="POST"
>
<div>
    <label for="username">name:</label>
    <input type="text" name="username" id="">
</div>

<div>
    <label for="password">password:</label>
    <input type="password" name="password" id="">
</div>

<input type="submit" value="submit" name="submit">
</form>