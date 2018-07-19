<?php
include 'Utility.php';
echo "Enter the number \n";
$n=getString();
if(filter_var($n, FILTER_VALIDATE_INT))
{
    if($n>0)
    {
    $s=swapnibbles($n);
    $s1=tobinary($s);
    $s1=strrev($s1);
    $c=0;
    while($s1>0)
    {
      $q=$s1%2;
      if($q==1)
      {
        $c++;
      }
      $s1=floor($s1/2);
    }
    if($c==1)
    echo "Number is power of two \n";
    else
    echo "Number is not power of two \n";
    }
    else
    echo "Enter the positive integer value \n";
}
else
  echo "Enter the integer value \n";
?>