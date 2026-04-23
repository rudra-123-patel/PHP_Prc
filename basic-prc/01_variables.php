<?php



/*
variable types: 

string
int
boolean
float or double
null
array
object
resource


*/

$name="Rudra";
$age= 22;
$isFather=true;
$money=19.99;
$salary=2.58;

$tax_rate =5.1;

$totalsalary = $salary * $tax_rate;
echo "total salary : {$totalsalary}<br>";


// Print the variables

// echo $name . '<br>';

/* echo $name ;
echo "Hello ". $name. "!<br>" ;
echo "hello {$name} <br>";
echo 'hello {$name} <br>';
echo $age."<br>";
echo $isFather."<br>";
echo $money."<br>";
echo $salary."<br>"; */

// echo "Your salary is ${$salary} <br>";// this wont work


// echo "Your salary is \${$salary} <br>";// use back slash to print dollar sign in text


//  print types of variables

// echo gettype($name)."<br>";
// echo gettype($age)."<br>";
// echo gettype($isFather)."<br>";
// echo gettype($money)."<br>";
// echo gettype($salary)."<br>";


// print_r($name) ;
// echo "<br>";

// var_dump($name);
// echo "<br>";

// $name = 32; 
// echo gettype($name)."<br>"; // it returns interger 


// variable checking functions



var_dump(is_string($name));
echo "<br>";

var_dump(is_string($age));
echo "<br>";

var_dump(is_int($age));
echo "<br>";

var_dump(is_string($salary));
echo "<br>";
var_dump(is_float($tax_rate));
echo "<br>";

var_dump(is_string($tax_rate));
echo "<br>";

?>
