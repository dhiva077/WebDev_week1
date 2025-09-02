<?php
// Variabel dasar
$name = 'Mike'; // string
$isActive = true; // boolean
$number = 25; // integer
$amount = 99.95; // float
$fruits = ['orange', 'apple', 'banana']; // array

// Constant
const MAX_USERS = 50;
define('SITE_NAME', 'MyWebsite');

// Assign by reference
$name_1 = "Thania";
$name_2 = &$name_1;
echo "Name 1: $name_1<br>";
echo "Name 2 (reference): $name_2<br>";

// Type conversion
$age = 20; // simulasi, kalau pakai CLI bisa pakai readline()
// Konversi integer ke string
echo 'Your age is ' . (string)$age . "<br>";

// Cek tipe data
echo "Tipe data dari \$age: " . gettype($age) . "<br>";

echo "is_int(\$age): " . (is_int($age) ? "true" : "false") . "<br>";
echo "is_float(12.5): " . (is_float(12.5) ? "true" : "false") . "<br>";
echo "is_string(\$name): " . (is_string($name) ? "true" : "false") . "<br>";

// Print array
echo "Fruits: " . implode(", ", $fruits) . "<br>";

// Print constants
echo "MAX_USERS: " . MAX_USERS . "<br>";
echo "SITE_NAME: " . SITE_NAME . "<br>";
?>