<?php
     include 'Utility.php';

	echo "Enter the number of times to flip a coin \n";
	$num=getInt();
	$n=flipcoin($num);
	$n1=$num-$n;
	
	echo "total number of head is". $n."\n";
	echo "total number of tail is". $n1."\n";
	function flipcoin($num)
{
	
for($i=1;$i<=$num;$i++)
{
	$head =0;
	$tail=0;
	   $d=rand(0.1,9.9);
		if($d<5)
			$tail++;
	else
		$head++;
}
 //echo "Total number of head is ".$head. "\n";
 //echo "Total number of tail is ".$tail. "\n";
 return $head;
	}
?>
	