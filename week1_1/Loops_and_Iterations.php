<?php
// for loop (dibatasi sampai 5 biar output sesuai)
for ($i = 0; $i < 5; $i++) {
    echo "i value = " . $i . "<br>";
}

// while loop (dibatasi sampai 5 biar sama kaya di gambar)
$number = 1;
while ($number < 5) {
    echo "value: " . $number . "<br>";
    $number += 1;
}

// do while (dibatasi sampai 5 juga)
$number = 1;
do {
    echo "value: " . $number . "<br>";
    $number += 1;
} while ($number < 5);

// foreach contoh
$values = ['one', 'two', 'three'];
foreach ($values as $value) {
    if ($value === 'two') {
        break; // keluar loop
    } elseif ($value === 'three') {
        continue; // skip iteration
    }
    echo $value . "<br>";
}
?>