<?php
include 'Utility1.php';
$u1=new Utility1();
echo "Enter the number \n";
$c = $u1->getString();
if (filter_var($c, FILTER_VALIDATE_INT)) {
    Utility1::sqrt1($c);
} else {
    echo "Enter the integer only \n";
}
