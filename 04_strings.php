<?php

// Create simple string
$name = "Nimrod";
$string = 'Hello I am '.$name. '. I am 30'; // . user for concat

//with double "" we can add $name without the . like `i am ${nimrod}`
$string2 = "Hello I am $name. I am 30"; // . user for concat 

echo $string.'<br>';
echo $string2.'<br>';

// String concatenation
echo 'Hello '.' World '.' and php '.'<br>';

// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL; //for seeing on the browser we chek the code source
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL; //reverse
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL; //only first letter
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL; // first letter into lowercase
echo "11 - " . ucwords('hello world and php') . '<br>' . PHP_EOL; // all first letters on each word will be uppercase
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // return index of world, case sensitive
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL; // return index of world, with ignore case sensitive
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL; //substring starting on index 8 tot he end including whitespaces
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL; //change the word world to PHP
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;//change the word world to PHP and ignore case sensitive

// Multiline text and line breaks
$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";
echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL; // create br tags whenever it finds a new line

// Multiline text and reserve html tags
// <b> for bold
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL; //display the <b> as a text
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

// https://www.php.net/manual/en/ref.strings.php