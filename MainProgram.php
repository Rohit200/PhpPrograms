<?php
include 'Utility.php';
include 'BinarySearchTree.php';
$b1=new BinarySearchTree();
echo "Enter how many numbers want to add \n";
$n=getString();
if(filter_var($n,FILTER_VALIDATE_INT))
{
 for($i=0;$i<$n;$i++)
 {
     echo "Enter the number \n";
     $n1=getString();
     if(is_numeric($n1))
     {
      $b1->insert($n1);
     }
     else
     echo "Enter only number \n";
    }
    $b1->traverse();
}
else
echo "Enter only positive integer value \n";
?>