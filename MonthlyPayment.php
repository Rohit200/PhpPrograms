<?php
include 'Utility1.php';
include 'Log.php';
$u1=new Utility1();
echo "Enter the amount \n";
$p = $u1->getString();
echo "Enter the interest rate \n";
$r = $u1->getString();
echo "Enter the total time in year \n";
$y = $u1->getString();
$log = new Log();
try {
    Utility1::monthlyPayment($p, $r,$y);
} catch (Exception $exp) {
    $msg = "\n" . $exp->getMessage() . " " . date("h:i:sa") . " " . date("Y/m/d");
    $log->lwrite($msg);
}
