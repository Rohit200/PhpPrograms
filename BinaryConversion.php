<?php
include 'Utility1.php';
include 'Log.php';
$log = new Log();
echo "Enter the number \n";
$n = Utility1::getString();
try {
    $s = Utility1::tobinary($n);
    $s1 = strrev($s);
    echo $s1;
} catch (Exception $exp) {
    $msg = "\n" . $exp->getMessage() . " " . date("h:i:sa") . " " . date("Y/m/d");
    $log->lwrite($msg);
}
?>