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


echo $t;

if($t<12){
    echo "Good morning!";
}elseif($t<18){
    echo "Good afternoon!";

}
else{
    echo "Good evening!";
}

?>