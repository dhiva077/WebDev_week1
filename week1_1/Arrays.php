<?php
// Array angka
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedNumbers = array_merge($array1, $array2);

// Array nama
$names = ['John', 'Mike'];
$others = ['Peter', 'Paul'];
$mergedNames = array_merge($names, $others);

// Print hasil
print_r($mergedNumbers);
print_r($mergedNames);
?>