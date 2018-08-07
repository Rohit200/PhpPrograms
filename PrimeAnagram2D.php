<?php
include 'Util.php';
echo "Enter the number till to find prime Anagram number \n";
$n = getString();
echo "Enter the max prime Anagram number to store in a row \n";
$r = getString();
$row = $n / $r;
$low = 0;
$high = $r;
$a1 = array(array(), array());
$a = array(array(), array());
if (filter_var($n, FILTER_VALIDATE_INT) && filter_var($r, FILTER_VALIDATE_INT)) {
    for ($i = 0; $i < $row; $i++) {
        $k = 0;
        $k1=0;
        if ($i == 0) {
            $low = $low;
            $high = $high;
        } else {
            $low = $high + 1;
            $high = $high + $r;
        }
        for ($j = $low; $j <= $high; $j++) {
            if (prime($j)) {
                $n1 = reverse($j);
                if (prime($n1)) {
                    if (AnagramInt($j, $n1)) {
                        $a[$i][$k] = $j;
                        $k++;
                    }
                } 
                else
                $a1[$i][$k1] = $j;
                        $k1++;  
            }
            
        }
    }
    print_r($a);
    print_r($a1);
   
} else {
    echo "Enter only positive integer value \n";
}
?>