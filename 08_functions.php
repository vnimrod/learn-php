<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello I am Zura<br>';
}

hello();
hello();
hello();

// Function with argument
//function hello($name)
//{
//    echo "Hello I am $name";
//}

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4,5);
echo sum(9,10);

// Create function to sum all numbers using ...$nums
//saves all the numbers we pass as an array

echo '<br>';
function sum1(...$nums){
  $sum = 0;
  foreach($nums as $num){
    $sum += $num;
  }
  return $sum;
}

echo sum1(1,2,3,4,5,6,7,8);


//Arrow functions
function sum2(...$nums)
{
  //arrow function here fn =>
  // reduce:
  //carry - saves the sum on each iteration
  //n - will be the next number
   return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum2(1, 2, 3, 4, 6);