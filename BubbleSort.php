<?php
include 'Utility.php';
$a1=array();
$k=0;
$a2=array();

$myfile = fopen("testfile.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("testfile.txt"));
$filecontents = file_get_contents('testfile.txt');
fclose($myfile);
$words = preg_split('/,+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
for( $i=0;$i < sizeof($words); $i++)
{
    if (filter_var($words[$i], FILTER_VALIDATE_INT))
    {
        $a2[$k]=$words[$i];
        $k++;
    }
}
print_r($words);
$a2=bubbleInteger($a2);
print_r($a2);
?>