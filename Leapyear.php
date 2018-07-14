<?php
include 'Utility.php';
echo "Enter the year \n";
fscanf(STDIN,"%d", $year);
if(count_digit($year)>=4)
   {
leap($year);
   }
   else
   echo 'Enter the year of four digit';
?>