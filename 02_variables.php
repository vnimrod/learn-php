<?php

// What is a variable

// Variable types

// Declare variables
$name = 'Nimrod';
$age = 28;
$isMale = true;
$height = 1.85;
$salery = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>'; // bool converted to string the true is converted to 1 and false to an empty string
echo $height.'<br>';
echo $salery.'<br>';

// Print types of the variables
echo gettype($name).'<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salery).'<br>'; //prints out all the info on a var, lets say a complete arrayt

// Change the value of the variable
$name = false;

// Print type of the variable
echo '<br>';
echo '<span>the value name change to: </span>', gettype($name).'<br>';

// Variable checking functions
is_string($name); // false because name was changed
is_int($age);
is_bool($isMale);
is_double($height);

// Check if variable is defined
isset($name); //check if the current var is declard of not

// Constants
define('PI', 3.14); //define constant
echo PI.'<br>'; // printing constants

// Using PHP built-in constants

echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';