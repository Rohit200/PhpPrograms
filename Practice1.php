<?php
include 'Utility.php';
            echo "Enter 1 to run prime \n Enter 2 for leap year
            \n";
$n=getInt();
switch($n)
{
    case 1:echo "Enter the number to run the prime program \n";
                 $n1=getint();
                 $r1=prime($n1);
                 if($r1==true)
                 echo "Prime \n";
                 else
                 echo "Not prime";
                break;
    case 2:echo "Enter the year \n";
                 $n1=getInt();
                 leap($n1);
                  break;
    default: echo "You have choosen wrong number \n";
                 
}
?>