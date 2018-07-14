<?php
	include 'Utility.php';
    echo "Enter the number\n";
    $num=getInt();
    for($i=2;$i*$i<=$num;$i++)
	{
		if($num%$i==0)
		{
			if(prime($i))
			echo "The factor of ".$num. " is ".$i."\n";
	}
	}
	?>