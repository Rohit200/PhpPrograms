<?php
include 'Utility.php';

echo "Enter the total coupon number to be stored in Array \n";
$n = getString();
$a1 = array();
if (filter_var($n, filt))
// if (filter_var($n, FILTER_VALIDATE_INT))
{
    couponNumber($n, $a1);
} else {
    echo "Entered the positive whole number";
}
?>