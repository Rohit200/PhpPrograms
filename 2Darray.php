<?php
include 'Utility.php';

//echo $bol;
echo "Enter the the number of row for 2Darray \n";
 $row=getInt();
 echo "Enter the the number of column for 2Darray \n";
 $col=getInt();
 $a1=array(array(),array());
 echo "Enter 1 for String Array \n";
 echo "Enter 2 for Integer Array \n";
 echo "Enter 3 for boolean Array \n";
  
 $n=getInt();
 if($n==2)
 {
     integerArray($row,$col,$a1);
 }
else if($n==1)
 {
     stringArray($row,$col,$a1);
 }
 else if($n==3)
 {
     booleanArray($row,$col,$a1);
 }
 else
{
   echo "You have selected wrong option";
 }
 ?>