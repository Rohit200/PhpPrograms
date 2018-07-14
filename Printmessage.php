<?php
include 'Utility.php';
$subject = 'Hello <<Username>>, How are you?' ;
$search= '<<Username>>';
echo "Enter the name \n";
$name=getString();
$trimmed = str_replace($search, $name, $subject) ;
echo $trimmed ;
?>
