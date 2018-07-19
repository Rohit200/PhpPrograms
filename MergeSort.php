<?php
include 'Utility.php';
echo "Enter the the total number in an array \n";
$n=getString();
if (filter_var($n, FILTER_VALIDATE_INT)) {
    $num = $n;
}
for ($i = 0; $i < $num; $i++) {
    echo "Enter the number in the array for " . $i . "th position \n";
    $k = getString();
    if (filter_var($num, FILTER_VALIDATE_INT)) {
        $a1[$i] = $k;
    }
}
$a2=mergesort($a1);
print_r($a2);
?>