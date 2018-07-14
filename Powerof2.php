<?php
include 'Utility.php';
echo "Enter the number \n";
$num=getInt();
$fix=2;
if($num<31)
{
for($i=1;$i<=$num;$i++)
{
	$res=pow($fix,$i);
	echo (pow($fix,$i)."\n");
	leap($res);
	echo "\n";
	}
}
else
	echo "Please enter the number below 31";

	?>