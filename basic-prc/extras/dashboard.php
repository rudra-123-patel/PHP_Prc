<?php

session_start();

if(isset($_SESSION['username'])){
    echo '<h1> WElcome '. $_SESSION['username'].'</h1>';
    echo '<a href = "/basic-prc/extras/logout.php">Logout</a>';
}else{
    echo '<h1>WElcome Guest</h1>';
    echo '<a href = "/basic-prc/15_session.php">Home</a>';
}

?>