<?php
include 'Utility.php';
$myfile=fopen("testfile.txt","r")or die('Unable to open the file');
$filecontents=file_get_contents("testfile.txt");
fclose($myfile);
$words = preg_split('/,+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
print_r($words);
echo "Enter the search String \n";
$k=getString();
$n=is_numeric($k);
if($n<>1)
{
    $n1=binaryString($words,$k);
    if($n1==-1)
    echo "String not present \n";
    else
    echo "String present \n";
}
else
echo "Please enter the string only \n";
?>