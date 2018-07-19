<?php
include 'Utility.php';
$a1 = array();
$num = 0;
echo "Enter the number then the size of array is 2^n \n";
$n = getString();
if (filter_var($n, FILTER_VALIDATE_INT)) {
    $num = pow(2, $n);
}
for ($i = 0; $i < $num; $i++) {
    echo "Enter the number inh array for " . $i . "th position \n";
    $k = getString();
    if (filter_var($num, FILTER_VALIDATE_INT)) {
        $a1[$i] = $k;
    }
}
$a = bubbleInteger($a1);
$n2 = sizeof($a) - 1;
echo "Enter the search number \n";
$k = getString();
print_r($a);
if (filter_var($k, FILTER_VALIDATE_INT)) {
    $n1 = recursiveBinary($a, 0, $n2, $k);
    if ($n1 == -1) {
        echo "Number not found in the array \n";
    } else {
        echo "Number found in the array \n";
    }

} else {
    echo "Enter the integer value only \n";
}
