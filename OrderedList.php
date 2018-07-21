<?php
include 'Utility.php';
include 'LinkedList.php';
$a2=array();
$l1=new LinkedList();
$filecontents = file_get_contents('testfile.txt');
$words = preg_split('/,+/',$filecontents, -1, PREG_SPLIT_NO_EMPTY);
for( $i=0;$i < sizeof($words); $i++)
{
    if (filter_var($words[$i], FILTER_VALIDATE_INT))
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
echo "Enter the integer to be search \n";
$k=getString();
if(filter_var(FILTER_VALIDATE_INT))
{
    $n1=$l1->search($k);
        if($n1!=1)
        {
            echo "Number added in the list \n";
            $l1->addLast($k);
        }
        else
        {
        echo "Number found and Deleted \n";
        $l1->deleteNode($k);
        }
    }

$l1->display();
?>