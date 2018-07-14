<?php
require 'Util.php';
// include 'HarmonicSeries.php';
// include 'Powerof2.php';
echo "Enter the number 1 to run the Harmonic program 
       Enter 2 for Flip coin or 3 for Power of 2";
       $a=new Util;
$n=$a->getInt();
if($n==1)
{ 
    echo "Harmonic Series will be excuted \n";
}
    else if($n==2)
    {
        echo "Flip coin program will be executed \n";
        $flip = new Util;
        $flip->prime();
   
    }
    else if($n==3)
    {
    echo  "Power of 2 program will be executed";
    }
    else
    {
    echo "You have choosen wrong option";
    }
?>