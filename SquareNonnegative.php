<?php
include 'Utility.php';
echo "Enter the number \n";
$c = getString();
if (filter_var($c, FILTER_VALIDATE_INT)) {
    sqrt1($c);
} else {
    echo "Enter the integer only \n";
}
