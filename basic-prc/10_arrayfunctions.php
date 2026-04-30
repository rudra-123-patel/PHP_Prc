<?php

// $fruits[]='grape';

// array_push($fruits,"apple","banana");
// array_unshift($fruits,"orange");

// array_pop($fruits);
// array_shift($fruits);

// print_r($fruits);

// $chunked_array =  array_chunk($fruits,2);
// print_r($chunked_array);

$arr1=[1,2,3];

$arr2=[4,5,6];

$arr3 = array_merge($arr1,$arr2);
$arr4 = [...$arr1,...$arr2];

// print_r($arr4);

$a = ['green','red','yellow'];
$b = ['guava','apple','banana'];

$c= array_combine($a,$b);

// print_r($c);
// echo json_encode($c);

$keys=array_keys($c);

// print_r($keys);

$flippedArray = array_flip($c);
// print_r($flippedArray);
// echo json_encode($flippedArray);

$numbers = range(1,20);
// print_r($numbers);
// echo json_encode($numbers);

$newNumbers = array_map(function ($number) {
    return "Number {$number}";
},$numbers);

// print_r($newNumbers);
// echo json_encode($newNumbers);

$lessThan10 = array_filter($numbers,fn($number)=> $number <=10);

print_r($lessThan10)


?>