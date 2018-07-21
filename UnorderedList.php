<?php
include 'Utility.php';
include 'LinkedList.php';
$a2=array();
$l1=new LinkedList();
$filecontents = file_get_contents('testfile.txt');
$words = preg_split('/,+/',$filecontents, -1, PREG_SPLIT_NO_EMPTY);
for( $i=0;$i < sizeof($words); $i++)
{
    $n=is_numeric($words[$i]);
    if ($n!=1)
    {
        $k=$words[$i];
        $l1->addLast($k);
    }
   
}
print_r($words);
$r=$l1->size();
for($i=1;$i<=$r;$i++)
{
    $k=$l1->get($i);
    echo $k." ";
    $a2[$i-1]=$k;
}
echo "Enter the String to be search \n";
$k=getString();
if(is_numeric($k)!=1)
{
    $n=binaryString($a2,$k);
    {
        if($n==-1)
        {
            $myfile=fopen("testfile.txt","a");
            fwrite($myfile,$k.",");
            fclose($myfile);
            $l1->addLast($k);
        }
        else
        {
        echo "String found \n";
        }
    }
}
$l1->display();
?>