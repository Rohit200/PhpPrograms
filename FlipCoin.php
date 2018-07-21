<?php
     include 'Utility.php';

	echo "Enter the number of times to flip a coin \n";
	$num = getString();
	if (filter_var($num, FILTER_VALIDATE_INT))
	 {
	   if($num>0)
	   {
		   $a=flipcoin($num);
		   echo "Total number of heads is ".$a[0]."\n";
		   echo  "Total number of tails is ".$a[1]."\n";
	   }
	   else
		   echo "Please enter the positive value greater than 0\n";
	}
	else
	  echo "Please enter the whole number greater than zero \n";
	
?>
	