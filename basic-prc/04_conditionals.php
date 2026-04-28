<?php

// $age = 14;

// if($age <= 12){
//     echo "Too young to watch anime";
// } else if($age < 15){

// echo "perfect age to watch anime";
// }else{
//     echo "too old to watch anime";

// }


// $age = 15;
// $watched = true;

// if($age >= 15 && !$watched){
//     echo " you must watch anime";
// }

// if($age >=15 || $watched){
//     echo "you should watch anime";
// }


// Switch 


$day = 1;

switch($day){
    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    case 4:
        echo "Thursday";
        break;

    case 5:
        echo "Friday";
        break;

    case 6:
        echo "Saturday";
        break;;

    case 7:
        echo "Sunday";
        break;

    default:
    echo "Invalid day";
}

echo "<br>";


// $t= date("F j");
$t= date("H");


// echo $t;

// if($t<12){
//     echo "Good morning!";
// }elseif($t<17){
//     echo "Good afternoon!";

// }
// else{
//     echo "Good evening!";
// }

$posts =["First post","Second post","Third post"];


// if(!empty($posts)){
    // echo count($posts)." posts available"."<br>";
    // echo "Posts available"."<br>";
    // echo $posts[0];
    // echo $posts[0];

//     foreach($posts as $post){
//         echo $post."<br>";
//     }

// }else{
//     echo "No posts";
// }

// echo !empty($posts) ? $posts[0] : "No post";

// $firstPost = !empty($posts) ? $posts[0] : "No post";
// echo $firstPost;

// $firstPost = $posts[0]?? null;
// echo $firstPost;


$favColor = 'red';

switch($favColor){
    case 'red':
        echo "Your favorite color is red!";
        break;
    case 'blue':
        echo "Your favorite color is blue!";
        break;
        default:
        echo "you dont have fav color";
}

?>