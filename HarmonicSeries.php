<?php
include 'Utility.php';
echo "Enter the number \n";
$num=getInt();
$sum=0;
if($num!=0)
{
	for($i=1;$i<=$num;$i++)
	{
		
		if($i<$num)
		{
			$n=1/$i;
			//echo $n;
		    echo "1/".$i."+";
		    $sum=$sum+$n;
		}
		else
		{
		     $n=1/$i;
			echo "1/".$i."\n";
			$sum=$sum+$n;
		}
		if($i==$num)
		{
		echo "The last harmonic series term is 1/".$i."\n";
		}
	
	}
	echo $sum;
}
else
	echo "Enter the number greater than 0 \n";

?>