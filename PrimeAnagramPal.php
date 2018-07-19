<?php
include 'Util.php';
echo "Enter the number \n";
$n=getString();
if (filter_var($n, FILTER_VALIDATE_INT))
{
for($i=2;$i<=$n;$i++)
{
$r=prime($i);
if($r==true)
{
    $s=reverse($i);
    $r1=AnagramInt($i,$s);
    if($r1==true)
    {
        $r2=palindrome($i);
        if($r2==true)
        echo "Palindrome prime Anagram ".$i."\n";
    }
}
}
}
else
echo "Enter the natural number only \n";

?>