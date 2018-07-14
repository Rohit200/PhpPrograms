<?php
 include 'Utility.php';

 echo "Enter how many numbers will be stored in first Array \n";
 $n=getInt();

 echo "Enter how many numbers will be stored in second Array \n";
 $n1=getInt();

 
      echo "Enter how many numbers will be stored in third Array \n";
 $n2=getInt();

 $a1=array();
 $a2=array();
 $a3=array();

 echo "Enter the number for first Array \n";
     $a1=storeNumber($a1,$n);

 echo "Enter the number for second Array \n";
     $a2=storeNumber($a2,$n1);

 echo "Enter the numbers for third Array \n";
    $a3=storeNumber($a3,$n2);

 $a1=array_unique($a1);
 $a2=array_unique($a2);
 $a3=array_unique($a3);
 
 print_r($a1);
 print_r($a2);
 print_r($a3);

 for($i=0;$i<count($a1);$i++)
 {
    for($j=0;$j<count($a2);$j++)
    {
        for($k=0;$k<count($a3);$k++)
        {
            if($a1[$i]+$a2[$j]+$a3[$k]==0)
            {
                echo $a1[$i]." ".$a2[$j]." ".$a3[$k]."\n";
            }
        }
    }
 }

 ?>