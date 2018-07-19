<?php
include 'Utility.php';
include 'Log.php';
echo "Enter the amount\n";
$amt = getString();
$log = new Log();
try {
    vendingmachine($amt);
} catch (Exception $exp) {
    $msg = "\n" . $exp->getMessage() . " " . date("h:i:sa") . " " . date("Y/m/d");
    $log->lwrite($msg);
}
