<?php
include 'Utility.php';

echo "Enter the total coupon number to be stored in Array \n";
$n=getInt();
$a1=array();
for($i=0;$i<$n;$i++)
{
    $d=rand();
    if($i==0)
    {
    $a1[0]=$d;
    }
    else
    {
        $j=$i;
        for($k=0;$k<$j;$k++)
        {
            if($a1[$k]==$d)
            {
                $i--;
                   break;
            }
        }
        if($j>=$i)
           $a1[$i]=$d;
    }
}
for($i=0;$i<count($a1);$i++)
{
    echo $a1[$i]."\n";
    
}
print_r($a1);

?>