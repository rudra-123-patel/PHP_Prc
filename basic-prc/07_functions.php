<?php
// echo "hello"."<br>";

// Simple function

// function sayHello(){
//     echo "hello";
// }

// sayHello();

// With parameters

// function greet($name){
//     echo "Hello,$name!"."<br>";

// }

// greet("rudra");
// greet("krunal");

// Parameter default value

// function greet($name = "Guest"){
//     echo "hello, $name!"."<br>";
// }

// greet();
// greet("Rudra");

// return from function

function multiply($a,$b){
    return $a*$b;

}

// echo multiply(10,20);

$result = multiply(10,20);
echo $result."<br>";

function userRegistered(){
    echo 'user registered';
}

userRegistered();
?>