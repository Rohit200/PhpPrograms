<?php

include 'Util.php';
palindrome(1234);
echo "Enter the First sentence \n";
$s1 = getString();
echo "Enter the second sentence \n";
$s3 =getString();
if (is_numeric($s1) || is_numeric($s3)) {
    echo "Enter the string only \n";
} else {
    $s2 = removeSpace($s1);
    $s4 = removeSpace($s3);
    $c5 = sortChar($s2);
    $c6 = sortChar($s4);
    if (strlen($c5) == strlen($c6)) {
        $n = is_anagram($c5, $c6);
        if ($n == true) {
            echo "Anagram \n";
        } else {
            echo "Not Anagram \n";
        }

    } else {
        echo "Not Anagram \n";
    }
}
