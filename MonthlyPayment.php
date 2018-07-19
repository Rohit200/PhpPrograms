<?php
include 'Utility.php';
include 'Log.php';
echo "Enter the amount \n";
$p = getString();
echo "Enter the interest rate \n";
$r = getString();
echo "Enter the total time in year \n";
$y = getString();
$log = new Log();
try {
    monthlyPayment($p, $r,$y);
} catch (Exception $exp) {
    $msg = "\n" . $exp->getMessage() . " " . date("h:i:sa") . " " . date("Y/m/d");
    $log->lwrite($msg);
}
