<?php




if(isset($_POST['submit'])){
   $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
    echo $age;

}


?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="POST"
>
<div>
    <label for="name">name:</label>
    <input type="text" name="name" id="">
</div>

<div>
    <label for="name">age:</label>
    <input type="text" name="age" id="">
</div>

<input type="submit" value="submit" name="submit">
</form>