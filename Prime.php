<?php
include 'Util.php';
echo "Enter the number till to find the prime number \n";
$num = getString();
if (filter_var($num, FILTER_VALIDATE_INT)) {
    if ($num > 0) {
        for ($i = 0; $i <= $num; $i++) {
            $n = prime($i);
            if ($n == true) {
                echo "Prime number is " . $i . "\n";
            }
        }
    } else {
        echo "Enter the positive whole number \n";
    }

} else {
    echo "Enter the positive whole number \n";
}
