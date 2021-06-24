<?php

// while
// while (true) { // Infinite loop: DON'T run this
//     // Do something constantly
// }

// Loop with $counter
$counter = 0; // When counter is 10??
while ($counter < 10) {
    echo $counter.'<br>';
    // if ($counter > 5) break;
    $counter++;
}

// do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) { // i = index and fruit is the value
    echo $i . ' ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
      echo $key . ' ' . implode(",", $value) . '<br>';
    }
    echo $key . ' ' . $value . '<br>';
}