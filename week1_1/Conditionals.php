<?php
$condition = 10;
$condition2 = 5;
$isValid = true;
$name = null;

// If / elseif / else
if ($condition == 10) {
    echo "Condition 10<br>";
} elseif  ($condition == 5) {
    echo "Condition 5<br>";
} else {
    echo "All other conditions<br>";
}

// And condition = &&
if ($condition === 10 && $condition2 === 5) {
    echo "10 and 5<br>";
}

// Or condition = ||
if ($condition === 10 || $condition2 === 5) {
    echo "10 or 5<br>";
}

// Ternary operator (true : false)
echo $isValid ? "User valid<br>" : "User not valid<br>";

// Null Coalesce Operator
echo $name ?? "Mike";
?>