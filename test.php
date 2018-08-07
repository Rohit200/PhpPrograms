<?php
include 'Utility.php';
include 'LinkedList.php';
$l1=new LinkedList();
$l1->addLast(10);
$l1->addLast(15);
$l1->addLast(20);
$l1->addLast(25);
$l1->addLast(30);
$r=$l1->get(6);
echo $r;
?>