<?php
include 'Utility.php';
echo "Enter the year \n";
$year=getString();
if (filter_var($year, FILTER_VALIDATE_INT))
{
    $n=strlen($year);
    //echo $n;
if($n>=4 and $year>0)
   {
leap($year);
   }
   else
   echo "Enter the year of positive four digit \n";
}
else
 echo "Enter the year of positive whole number \n"; 


?>