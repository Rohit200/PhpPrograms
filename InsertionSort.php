<?php
include 'Utility.php';
$a1=array();
$k=0;
$myfile = fopen("testfile.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("testfile.txt"));
$filecontents = file_get_contents('testfile.txt');
fclose($myfile);
$words = preg_split('/,+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
for( $i=0;$i < sizeof($words); $i++)
{
    $n1=$words[$i];
    $n=is_numeric($n1);
     if($n<>1)
     {
       $a1[$k]=$words[$i];
       $k++;
     }
}
print_r($a1);
$a1=insertionString($a1);
print_r($a1);
?>