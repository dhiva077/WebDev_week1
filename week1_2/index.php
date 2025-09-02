<?php
function mergeArrays($nums1, $m, $nums2, $n) {
    $nums1 = array_slice($nums1, 0, $m);
    $merged = array_merge($nums1, $nums2);
    sort($merged);
    return $merged;
}

function arrayToString($arr) {
    return "[" . implode(", ", $arr) . "]";
}

// Example 1
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;
$result1 = mergeArrays($nums1, $m, $nums2, $n);

// Example 2
$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;
$result2 = mergeArrays($nums1, $m, $nums2, $n);

// Example 3
$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;
$result3 = mergeArrays($nums1, $m, $nums2, $n);

// Tampilkan persis seperti gambar
echo "Example 1:<br>";
echo "nums1 = [1, 2, 3, 0, 0, 0]<br>";
echo "nums2 = [2, 5, 6]<br>";
echo "output: " . arrayToString($result1) . "<br><br>";

echo "Example 2:<br>";
echo "nums1 = [1]<br>";
echo "nums2 = []<br>";
echo "output: " . arrayToString($result2) . "<br><br>";

echo "Example 3:<br>";
echo "nums1 = [0]<br>";
echo "nums2 = [1]<br>";
echo "output: " . arrayToString($result3) . "<br>";
?>