<?php
// Shortcut addition assignment
$value = 10;
$value++;
echo "Value setelah ++ : $value <br>"; // 11

$value = 10;
$value += 1;
echo "Value setelah += 1 : $value <br>"; // 11

// Shortcut subtraction assignment
$value = 10;
$value--;
echo "Value setelah -- : $value <br>"; // 9

$value = 10;
$value -= 1;
echo "Value setelah -= 1 : $value <br>"; // 9

// Check if numeric
echo "Apakah '59.99' numeric? : ";
var_dump(is_numeric("59.99")); 
echo "<br>";

// Round a number
echo "Round 0.80 : " . round(0.80) . "<br>";  // 1

// Round with precision
echo "Round 1.49356 (2 desimal): " . round(1.49356, 2) . "<br>";  // 1.49

// Random number
echo "Random number (10 - 100): " . rand(10, 100) . "<br>";
?>