<?php
include 'Utility.php';
echo "Enter the String \n";
$str=getString();
$n=strlen($str);
permute($str, 0, $n - 1);
?>