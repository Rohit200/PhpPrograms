<?php
include 'Utility.php';
include 'Stack.php';
echo "Enter the string \n";
$str = getString();
$st1 = new Stack();
$a = str_split($str);
$i = 0;
for ($i = 0; $i < sizeof($a); $i++) {
    if ($a[$i] == "(" || $a[$i] == "{" || $a[$i] == "[") {
        $st1->push($a[$i]);
    } else if ($a[$i] == ")") {
        if ($st1->pop() == "(") {
            continue;
        } else {
            break;
        }

    } else if ($a[$i] == "}") {
        if ($st1->pop() == "{") {
            continue;
        } else {
            break;
        }

    } else if ($a[$i] == "]") {
        if ($st1->pop() == "[") {
            continue;
        } else {
            break;

        }
    }

}
$n=$st1->isEmpty();
if ($n==1) {
    echo "Balanced String \n";
} else {
    echo "not Balanced String \n";
}
