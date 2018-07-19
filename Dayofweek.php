<?php
include 'Utility.php';
echo "Enter the date \n";
$d = getString();
echo "Enter the month \n";
$m = getString();
echo "Enter the year \n";
$y = getString();
if (filter_var($d, FILTER_VALIDATE_INT) && filter_var($m, FILTER_VALIDATE_INT) &&
    filter_var($y, FILTER_VALIDATE_INT)) {
    dayofweek($d, $m, $y);
} else {
    echo "You have to enter the natural number of date,month and year \n";
}
