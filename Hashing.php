<?php
include 'Utility.php';
include 'LinkedList.php';
class Hashing
{
public function hashing()
{
$filecontents=file_get_contents("testfile.txt");
$a2=array();
$a1=preg_split('/,+/',$filecontents,-1,PREG_SPLIT_NO_EMPTY);
print_r($a1);
$k=0;
while($k<11)
{
    $l0=new LinkedList();
    $a2[$k]=$l0;
    $k++;
}
for($i=0;$i<sizeof($a1);$i++)
{
    $k=$a1[$i];
    $r=$k%11;
    $a2[$r]->addLast($k);
}
echo "Enter the number to be search \n";
$n=getString();
$r=$n%11;
$k=$a2[$r]->search($n);
if($k==1)
{
$a2[$r]->display();
echo "Number found and deleted\n";
$a2[$r]->deleteNode($n);
$a2[$r]->display();
}
else
{
echo "Number Not found and added\n";
$a2[$r]->addLast($n);
$a2[$r]->display();
$txt=",".$n;
$myfile=fopen("testfile.txt","a");
fwrite($myfile,$txt);
fclose($myfile);
}
}
}
?>