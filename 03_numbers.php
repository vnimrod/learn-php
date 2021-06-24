<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b * $c . '<br>';

// Assignment with math operators
// $a += $b; echo $a.'<br>';

// Increment operator
echo $a++ . '<br>'; //first printing then add 1 to a
echo ++$a . '<br>'; //first a will be +1 and then orinting

// Decrement operator
$a--;
--$a;

// Number checking functions
is_float(1.25);
is_numeric("3.45"); // true
is_numeric("3g"); //false

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
//or with function
$number2 = intval($strNumber);
var_dump($number) . '<br>';
echo '<br>';
var_dump($number2);

// Number functions
echo '<br>';
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 9, 3) " . max(2, 9, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>'; //round up

// Formatting numbers
$number = 123456789.12345;
                            //2 after decimal
echo number_format($number, 2, '.', ',') . '<br>';

// https://www.php.net/manual/en/ref.math.php
