<?php
include 'LinkedList.php';
include 'Stack.php';
include 'Util.php';
$l1 = new LinkedList();
$s1 = new Stack();
echo "Enter the number till to find prime Anagram number \n";
$n = getString();
if (filter_var($n, FILTER_VALIDATE_INT)) {
    for ($i = 0; $i <= $n; $i++) {
        if (prime($i)) {
            $s = reverse($i);
            if (AnagramInt($i, $s)) {
                $l1->addLast($i);
            }
        }
    }
    $r = $l1->size();
    for ($i = 1; $i <= $r; $i++) {
        $k = $l1->get($i);
        $s1->push($k);
    }
    for ($i = 1; $i <= $r; $i++) {
        $k = $s1->pop();
        echo $k . " " . "\n";
    }
} else {
    echo "Enter only positive integer value \n";
}
