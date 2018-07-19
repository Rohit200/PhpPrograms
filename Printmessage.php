<?php
include 'Utility.php';
$subject = 'Hello <<Username>>, How are you?' ;
$search= '<<Username>>';
echo "Enter the name \n";
$name=getString();
$n=is_numeric($name);
//echo $n;
if($n==1)
{
 echo "Sorry you have not entered the name \n";
}
else
{
    $trimmed = str_replace($search, $name, $subject) ;
echo $trimmed ;
}

?>
