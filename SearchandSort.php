<?php
include 'Utility.php';
$k=0;
$a1=array();
$a2=array(9,4,38,54,3,45);
$a3=array();
$a4=array("Rohit","Prasant","Deepak","Ankit","Pankaj");
$start=starttimer();
echo $start."\n";
$a3=insertionInteger($a2);
$stop=stoptimer();
echo $stop."\n";
$elapsedtime=$stop-$start;
$a1[$k]=$elapsedtime;
$k++;
$a3=bubbleInteger($a2);
$stop=stoptimer();
$elapsedtime=$stop-$start;
$a1[$k]=$elapsedtime;
$k++;
$n1=binaryIntegerN($a2,5);
$stop=stoptimer();
$elapsedtime=$stop-$start;
$a1[$k]=$elapsedtime;
$k++;
$a3=bubbleString($a4);
$stop=stoptimer();
$elapsedtime=$stop-$start;
$a1[$k]=$elapsedtime;
$k++;
$a3=insertionString($a4);
$stop=stoptimer();
$elapsedtime=$stop-$start;
$a1[$k]=$elapsedtime;
$k++;
$n1=binaryString($a2,"Rohit");
$stop=stoptimer();
$elapsedtime=$stop-$start;
$a1[$k]=$elapsedtime;
$k++;
print_r($a1);
sort($a1);
print_r($a1);
?>