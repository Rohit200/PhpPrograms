<?php
include 'Utility.php';
echo "Enter the number \n";
$num=getString();
if (filter_var($num, FILTER_VALIDATE_INT))
{
harmonicSeries($num);
}
else
{
	echo "Entered the whole positive number \n";
}


?>