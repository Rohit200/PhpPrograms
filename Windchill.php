<?php
include 'Utility.php';

echo "Enter the temperature in Fahrenheit but less than 50 degree Fahrenheit \n";
$t=getfloat();
echo "Enter the wind speed in miles per hour but in between 3 to 120 \n";
$v=getfloat();
 if(is_numeric($t) && is_numeric($v))
 {
if($t<50 && $v>=3 && $v<=120 )
{
    $w=35.74+0.6215*$t+(0.4275*$t - 35.75)* pow($v,0.16);
    echo $w;
}
else
 echo "Enter the correct value \n";
 }
 else
 echo "Enter the correct value \n";
?>