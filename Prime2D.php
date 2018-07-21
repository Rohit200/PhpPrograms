<?php
include 'Utility.php';
echo "Enter the number till to find prime number \n";
$n = getString();
echo "Enter the max prime number to store in a row \n";
$r = getString();
$row = $n / $r;
$low = 0;
$high = $r;
$a = array(array(), array());
if (filter_var($n, FILTER_VALIDATE_INT) && filter_var($r, FILTER_VALIDATE_INT)) {
    for ($i = 0; $i < $row; $i++) {
        $k = 0;
        if ($i == 0) {
            $low = $low;
            $high = $high;
        } else {
            $low = $high + 1;
            $high = $high + $r;
        }
        for ($j = $low; $j <= $high; $j++) {
            if (prime($j)) {
                $a[$i][$k] = $j;
                $k++;
            }

        }
    }
    print_r($a);
} else {
    echo "Enter only positive integer value \n";
}
