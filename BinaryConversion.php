<?php
include 'Utility.php';
include 'Log.php';
$log = new Log();
echo "Enter the number \n";
$n = getString();
try {
    $s = tobinary($n);
    $s1 = strrev($s);
    echo $s1;
} catch (Exception $exp) {
    $msg = "\n" . $exp->getMessage() . " " . date("h:i:sa") . " " . date("Y/m/d");
    $log->lwrite($msg);
}
?>