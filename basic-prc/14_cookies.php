<?php

// Set Cookkies

setcookie('name','rudra',time()+ 86400*30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// delete or unset cookie

setcookie('name','',time()- 86400);