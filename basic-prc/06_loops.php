<?php

echo "hello world";

//for loop$
for($i=0;$i<=5;$i++){
    echo $i."<br>";;
}

for ($i=0;$i< 5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "\n"."<br>";
}

//while loop
$i=1;

while($i<= 5){
    echo $i ."";
    $i++;
}

echo " "."<br>";

// foreach
$fruits = ["apple", "banana", "orange"];
foreach($fruits as $fruits_list){
    echo $fruits_list."<br>";
}


$posts=["first post","second post","third post"];

// for($x=0;$x< count($posts);$x++){
//     echo $posts[$x]."<br>";
// }

foreach($posts as $index => $post){
    echo $index + 1 . ' - '. $post;
}

$person=[
    'first_name' => 'Rudra',
    'last_name'=>'patel',
    'email'=>'rjp@g.com'
];

foreach($person as $key => $value){
    echo $key . " : " . $value . "<br>";
}

?>