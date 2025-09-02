<?php
// String bisa pakai single quote atau double quote
$name = 'Thania';
echo $name . "<br>";

$name = "Thania";
echo $name . "<br>";

// Escape karakter
echo "Hello Thania\nHello Arsya<br>";

// Interpolasi (langsung masukin variable ke string)
echo "Hello $name<br>";

// Concatenation
echo 'Hello ' . $name . "<br>";

// String length
echo strlen($name) . "<br>";

// Trim
$text = "   Hello World   ";
echo trim($text) . "<br>";

// Lowercase / Uppercase
$email = "TEST@EMAIL.COM";
echo strtolower($email) . "<br>";
echo strtoupper($name) . "<br>";

// Ubah huruf pertama jadi uppercase
echo ucfirst("mike") . "<br>";

// Replace string
echo str_replace('a', 'b', "banana") . "<br>";

// String contains (PHP 8+)
echo str_contains($name, 'ke') ? "true<br>" : "false<br>";

// Cari posisi karakter
$pos = strpos($name, 'k');
echo $pos . "<br>";

// Substring
echo substr($name, 0, $pos) . "<br>";
?>