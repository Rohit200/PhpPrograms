<?php
include 'LinkedList.php';
$l1=new LinkedList();
$l1->addLast(5);
$l1->addLast(6);
$l1->addLast(7);
$l1->addLast(8);
$l1->addLast(9);
$l1->display();
$r=$l1->get(5);
echo $r."\n";
$r1=$l1->size();
echo $r1."\n";
?>