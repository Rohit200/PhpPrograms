<?php
include 'Utility.php';
echo "Enter the correct value to find the root of Quadratic Equation \n";

echo "Please enter the coefficient of x^2 \n";
$a=getInt();

echo "Please enter the coefficient of x \n";
$b=getInt();

echo "Please enter constant value \n";
$c=getInt();

$delta= sqrt(pow($b,2)-4*$a*$c);
echo "Delta is ".$delta. "\n";

$root1= -$b+sqrt($delta)/2*$a*$c;
$root2= -$b-sqrt($delta)/2*$a*$c;

echo "First root is ".$root1. "\n";
echo "Second root is ".$root2. "\n";

?>