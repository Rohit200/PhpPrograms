<?php
include 'Utility.php';
echo "Enter the value of X co-ordinate and y-co=ordinate 
       to calculate Euclidean distance with respect to origin \n";
echo "Enter the X-co-ordinate \n";
$x=getInt();
echo "Enter the X-co-ordinate \n";
$y=getInt();
$res=sqrt(pow($x,2)+pow($y,2));
echo $res."\n";

?>