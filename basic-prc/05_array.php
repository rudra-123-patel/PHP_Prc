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

$color=[
    "1"=>"red",
    "2"=> " green",
    "3"=> "blue",
];
echo $color["1"]."<br>";
echo $color["2"]."<br>";
echo $color["3"]."<br>";


$people=[
    [
        'name'=>'rudra',
        'age'=>22,
        'email'=>'rjp1@g.com'
    ]
    ,[
        'name'=>'raj',
        'age'=>23,
        'email'=>'rjp2@g.com'
    ],[
        'name'=>'ruxra',
        'age'=>24,
        'email'=>'rjp3@g.com'
    ]
];

echo $people[0]['name']."<br>";
echo $people[0]["email"]."<br>";
echo $people[0]["age"]."<br>";


echo $people[1]['name'].'<br>';
echo $people[1]['email'].'<br>';
echo $people[1]['age'].'<br>';


echo $people[2]['name'].'<br>';
echo $people[2]['email'].'<br>';
echo $people[2]['age'].'<br>';


// var_dump($people);
// print_r($people);

var_dump(json_encode ($people));



 


?>