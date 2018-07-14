<?php
include 'Util.php';
for($i=0;$i<=1000;$i++)
{
    $n=prime($i);
    if($n==true)
    {
        echo "Prime number is ".$i."\n";
    }
}
?>