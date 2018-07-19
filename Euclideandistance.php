<?php
include 'Utility.php';
echo "Enter the value of X co-ordinate and y-co=ordinate 
       to calculate Euclidean distance with respect to origin \n";
echo "Enter the X-co-ordinate \n";
$x=getString();
$n=is_numeric($x);
echo "Enter the Y-co-ordinate \n";
$y=getString();
$n1=is_numeric($y);
if ($n==1 && $n1==1)
{
$res=sqrt(pow($x,2)+pow($y,2));
echo $res."\n";
}
else
 echo "Please enter the number only \n";

?>