<?php 

echo "Hello world"."<br>";

//Indexed array

// $fruits = ["apple", "banana", "orange"];
// echo $fruits[0]."<br>";

// var_dump($fruits);

// foreach($fruits as $fruits_list){
//     echo $fruits_list."<br>";
// }

// Mixed array

// $mixedArray = [15,"Apple",true];


// echo "<pre>";
// var_dump($mixedArray);
// print_r($mixedArray);
// echo "</pre>";

// Associative array

$user = [
    "name"=>"Rudra",
    "age"=>22,
    "hobbies"=>['Coding','chess'],
];

echo $user['name']."<br>";
echo $user["age"]."<br>";

foreach($user["hobbies"] as $hobby){
 echo $hobby."<br>";
}
echo $user["hobbies"][0]."<br>";
echo $user["hobbies"][1]."<br>";

echo "<pre>";
var_dump($user);
print_r($user);
echo "</pre>";


 


?>