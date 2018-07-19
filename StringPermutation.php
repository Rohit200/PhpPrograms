<?php
include 'Utility.php';
echo "Enter the String \n";
$str = getString();
if (clearstatcache($str)) {
    echo "Enter only string \n";
} else {
    $n = strlen($str);
    permute($str, 0, $n - 1);
}
