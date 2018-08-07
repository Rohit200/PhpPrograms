<?php

function getString()
{
    fscanf(STDIN, "%s", $name);
    return $name;

}
function leap($year)
{
    if ($year % 400 == 0) {
        return 1;
    } else if ($year % 100 != 0 && $year % 4 == 0) {
        return 1;
    } else {
        return 0;
    }

}
function getInt()
{
    fscanf(STDIN, "%d", $num);
    return $num;
}
function prime($num)
{
    $count = 0;
    $i = 1;
    while ($i <= $num / 2) {
        if ($num % $i == 0) {
            $count++;
        }

        $i++;
    }
    if ($count == 1) {
        return true;
    }

}
function storeNumber($array, $n)
{
    for ($i = 0; $i < $n; $i++) {
        echo "Enter the value at " . $i . "th position in array" . "\n";
        $k = getString();
        if (filter_var($k, FILTER_VALIDATE_INT)) {
            $array[$i] = $k;
        } else {
            $i--;
            echo "Please enter the integer value only \n";
        }
    }
    return $array;
}

function starttimer()
{
    $i = microtime();
    return $i;
}

function stoptimer()
{
    $i = microtime();
    return $i;
}

function getfloat()
{
    fscanf(STDIN, "%f", $num);
    return $num;
}

function permute($str, $l, $r)
{
    if ($l == $r) {
        echo $str . "\n";
    } else {
        for ($i = $l; $i <= $r; $i++) {
            $str = swap($str, $l, $i);
            permute($str, $l + 1, $r);
            $str = swap($str, $l, $i);
        }
    }
}

function swap($a, $i, $j)
{
    $temp;
    $charArray = str_split($a);
    $temp = $charArray[$i];
    $charArray[$i] = $charArray[$j];
    $charArray[$j] = $temp;
    return implode($charArray);
}
function integerArray($row, $col, $a1)
{
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo "Enter the Number in array" . "[" . $i . "]" . "[" . $j . "]" . "\n";
            $k = getString();
            if (filter_var($k, FILTER_VALIDATE_INT)) {
                $a1[$i][$j] = $k;
            } else {
                echo "Please enter again the positive whole number \n";
                $j--;
            }
        }
    }

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $a1[$i][$j] . " ";
        }
        echo "\n";
    }
    print_r($a1);
}
function stringArray($row, $col, $a1)
{
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo "Enter the Number in array" . "[" . $i . "]" . "[" . $j . "]" . "\n";
            $a1[$i][$j] = getString();
        }

    }
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $a1[$i][$j] . " ";
        }
        echo "\n";
    }
    print_r($a1);
}
function booleanArray($row, $col, $a1)
{
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo "Enter the Number in array" . "[" . $i . "]" . "[" . $j . "]" . "\n";
            $a1[$i][$j] = getboolean();
        }
    }
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $a1[$i][$j] . " ";
        }
        echo "\n";
    }
    print_r($a1);
}
function bubbleString($a)
{
    $n = sizeof($a);
    for ($i = 0; $i < sizeof($a); $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if (strcmp($a[$j], $a[$j + 1]) > 0) {
                $k = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $k;
            }
        }
    }
    return $a;
}

function insertionString($a)
{

    for ($i = 1; $i < sizeof($a); $i++) {
        $j = $i;
        while ($j > 0 && strcmp($a[$j], $a[$j - 1]) < 0) {
            $k = $a[$j];
            $a[$j] = $a[$j - 1];
            $a[$j - 1] = $k;
            $j--;
        }
    }
    return $a;
}
function binaryString($a, $k)
{
    $a1 = array();
    $a1 = bubbleString($a);
    $low = 0;
    $high = sizeof($a1) - 1;
    while ($low <= $high) {
        $mid = floor(($high + $low) / 2);
        if (strcmp($a1[$mid], $k) < 0) {
            $low = $mid + 1;
        } elseif (strcmp($a1[$mid], $k) > 0) {
            $high = $mid - 1;
        } else {
            return $mid;
        }

    }
    return -1;
}

function binaryIntegerN($a, $k)
{
    $a1 = array();
    $a1 = bubbleInteger($a);
    $low = 0;
    $high = sizeof($a1);
    while ($low <= $high) {
        $mid = floor(($high + $low) / 2);
        if ($a1[$mid] < $k) {
            $low = $mid + 1;
        } else if ($a1[$mid] > $k) {
            $high = $mid - 1;
        } else {
            return $mid;
        }
        echo "The value between the index " . $low . "and " . "$high \n";
    }
    return -1;
}
function recursiveBinary($a1, $start, $end, $search)
{

    if ($start <= $end) {
        $mid = floor(($end + $start) / 2);
        if ($search < $a1[$mid]) {
            echo $start . " and " . $end . "\n";
            return recursiveBinary($a1, $start, $mid, $search);
        } else if ($search > $a1[$mid]) {
            echo $start . " and " . $end . "\n";
            return recursivebinary($a1, $mid + 1, $end, $search);
        } else {
            echo $start . "and" . $end . "\n";
            return $mid;
        }
    }

    return -1;
}

function bubbleInteger($a)
{
    $n = sizeof($a);
    for ($i = 0; $i < sizeof($a); $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                $k = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $k;
            }
        }
    }
    return $a;
}
function mergeParts($left, $right)
{

    $mergeArray = array();
    $lindex = 0;
    $rindex = 0;

    while ($lindex < sizeof($left) && $rindex < sizeof($right)) {
        if ($left[$lindex] > $right[$rindex]) {

            $mergeArray[] = $right[$rindex];
            $rindex++;
        } else {
            $mergeArray[] = $left[$lindex];
            $lindex++;
        }
    }
    while ($lindex < sizeof($left)) {
        $mergeArray[] = $left[$lindex];
        $lindex++;
    }
    while ($rindex < sizeof($right)) {
        $mergeArray[] = $right[$rindex];
        $rindex++;
    }
    return $mergeArray;
}
function mergesort($a1)
{
    if (sizeof($a1) == 1) {
        return $a1;
    }

    $mid = floor(sizeof($a1) / 2);
    $left = array_slice($a1, 0, $mid);
    $right = array_slice($a1, $mid, sizeof($a1) - 1);

    $left = mergesort($left);
    $right = mergesort($right);

    return mergeparts($left, $right);
}

function insertionInteger($a)
{

    for ($i = 1; $i < sizeof($a); $i++) {
        $j = $i;
        while ($j > 0 && $a[$j] > $a[$j - 1]) {
            $k = $a[$j];
            $a[$j] = $a[$j - 1];
            $a[$j - 1] = $k;
            $j--;
        }
    }
    return $a;
}
function CtoFconvert($c)
{
    $f = ($c * 9 / 5) + 32;
    return $f;
}
function FtoCconvert($f)
{
    $c = ($f - 32) * 5 / 9;
    return $c;
}
function factor($num)
{
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            if (prime($i)) {
                echo "The factor of " . $num . " is " . $i . "\n";
            }

        }
    }
}
function powerof2($num)
{
    $fix = 2;
    if ($num < 31) {
        for ($i = 1; $i <= $num; $i++) {
            $res = pow($fix, $i);
            echo (pow($fix, $i) . "\n");
            leap($res);
            echo "\n";
        }
    } else {
        echo "Please enter the number below 31";
    }

}
function couponNumber($n, $a)
{
    for ($i = 0; $i < $n; $i++) {
        $d = rand();
        if ($i == 0) {
            $a1[0] = $d;
        } else {
            $j = $i;
            for ($k = 0; $k < $j; $k++) {
                if ($a1[$k] == $d) {
                    $i--;
                    break;
                }
            }
            if ($j >= $i) {
                $a1[$i] = $d;
            }

        }
    }
    for ($i = 0; $i < count($a1); $i++) {
        echo $a1[$i] . "\n";

    }
    print_r($a1);
}
function flipcoin($num)
{
    $a1 = array();
    $head = 0;
    $tail = 0;
    for ($i = 1; $i <= $num; $i++) {
        $d = rand(0, 10);
        //echo $d."\n";
        if ($d < 5) {
            $tail++;
        } else {
            $head++;
        }

    }
    $a1[0] = $head;
    $a1[1] = $tail;
    return $a1;
}
function harmonicSeries($num)
{
    $sum = 0;
    if ($num != 0) {
        for ($i = 1; $i <= $num; $i++) {

            if ($i < $num) {
                $n = 1 / $i;
                //echo $n;
                echo "1/" . $i . "+";
                $sum = $sum + $n;
            } else {
                $n = 1 / $i;
                echo "1/" . $i . "\n";
                $sum = $sum + $n;
            }
            if ($i == $num) {
                echo "The last harmonic series term is 1/" . $i . "\n";
            }

        }
        echo $sum;
    } else {
        echo "Enter the number greater than 0 \n";
    }

}
function countInt($num)
{
    $c = 0;
    while ($num > 0) {
        $c++;
        $num = $num / 10;

    }
    return $c;
}
function gambler($trails, $stack, $goal)
{
    $win = 0;
    $loss = 0;
    $i = 0;
    while ($i < $trails && $stack > 0 && $stack <= $goal) {
        $d = rand(0, 1);
        if ($d < 0.5) {
            $loss++;
            $stack--;
        } else {
            $win++;
            $stack++;
        }
        $i++;
    }
    echo $i;
    echo "winning chance is " . ($win / $trails) * 100;
    echo "\n" . $win . "\n";
    echo "lossing chance is " . ($loss / $trails) * 100;
    echo "\n" . $loss . "\n";
}
function vendingmachine($amt)
{
    if (filter_var($amt, FILTER_VALIDATE_INT)) {

        $amt1 = $amt;
        calculatenotes($amt);
    } else {
        throw new Exception("Amount should be positive whole number");
    }

}
function big($a2, $head, $last)
{
    if ($a2[$head] > 0) {
        return $head;
    }

    return big($a2, $head + 1, $last);

}
function monthlyPayment($P, $R, $Y)
{
    if (is_numeric($R) && is_numeric($P) && is_numeric($Y)) {
        $n = $Y * 12;
        $r = $R / (12 * 100);
        $mp = ($P * $r) / (1 - pow((1 + $r), (-$n)));
        echo " Monthly payment is " . $mp . "\n";

    } else {
        throw new Exception('Value must be numeric only');
    }

}
function tobinary($n)
{
    $a1 = array();
    $k = 0;
    if (filter_var($n, FILTER_VALIDATE_INT)) {
        while ($n > 0) {
            $q = $n % 2;
            $a1[$k] = $q;
            $k++;
            $n = floor($n / 2);
        }
        return implode($a1);
    } else {
        throw new Exception("Value must be positive integer only");
    }

}
function sqrt1($c)
{
    $c = abs($c);
    $t = $c;
    //echo $t;
    $epsilon = 1e-15;
    while (($t - ($c / $t)) > ($epsilon * $t)) {
        $t = ($t + ($c / $t)) / 2;
    }
    echo "Square root of " . $c . " is " . $t . "\n";
}
function swapnibbles($n)
{
    return (($n & 0x0F) << 4 | ($n & 0xF0) >> 4);
}
function calculatenotes($amt)
{
    $n1 = $amt;
    $sum = 0;
    $a1 = array();
    $a = array(1000, 500, 100, 50, 20, 10, 5, 2, 1);
    $n = sizeof($a);
    for ($i = 0; $i < $n; $i++) {
        if ($amt > $a[$i] || $amt == 1) {
            $q = floor($amt / $a[$i]);
            $sum = $sum + $q;
            $amt = $amt % $a[$i];
            $a1[$i] = $q;
        } else {
            $a1[$i] = 0;
        }

    }
    echo "The total number of change note for Rs " . $n1 . " is " . $sum . "\n";
    $n1 = big($a1, 0, $n - 1);
    for ($i = 0; $i < sizeof($a1); $i++) {
        echo "the total number of note of Rs" . $a[$i] . " is " . $a1[$i] . "\n";
    }

}
function dayofweek($d, $m, $y)
{
    $a = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    $y0 = $y - 14 - $m / 12;
    $x = $y0 + $y0 / 4 - $y0 / 100 + $y0 / 400;
    $m0 = $m + 12 * (14 - $m) / 12 - 2;
    $d0 = ($d + $x + 31 * $m0 / 12) % 7;
    return $d0;
}
function CWinTest($str)
{
    if ($str[0][0] == "X" && $str[0][1] == "X" && $str[0][2] == "X") {
        return true;
    } else if ($str[1][0] == "X" && $str[1][1] == "X" && $str[1][2] == "X") {
        return true;
    } else if ($str[2][0] == "X" && $str[2][1] == "X" && $str[2][2] == "X") {
        return true;
    } else if ($str[0][0] == "X" && $str[1][0] == "X" && $str[2][0] == "X") {
        return true;
    } else if ($str[0][1] == "X" && $str[1][1] == "X" && $str[2][1] == "X") {
        return true;
    } else if ($str[0][2] == "X" && $str[1][2] == "X" && $str[2][2] == "X") {
        return true;
    } else if ($str[0][0] == "X" && $str[1][1] == "X" && $str[2][2] == "X") {
        return true;
    } else if ($str[0][2] == "X" && $str[1][1] == "X" && $str[2][0] == "X") {
        return true;
    } else {
        return false;
    }

}
function UWinTest($str)
{
    if ($str[0][0] == "0" && $str[0][1] == "0" && $str[0][2] == "0") {
        return true;
    } else if ($str[1][0] == "0" && $str[1][1] == "0" && $str[1][2] == "0") {
        return true;
    } else if ($str[2][0] == "0" && $str[2][1] == "0" && $str[2][2] == "0") {
        return true;
    } else if ($str[0][0] == "0" && $str[1][0] == "0" && $str[2][0] == "0") {
        return true;
    } else if ($str[0][1] == "0" && $str[1][1] == "0" && $str[2][1] == "0") {
        return true;
    } else if ($str[0][2] == "0" && $str[1][2] == "0" && $str[2][2] == "0") {
        return true;
    } else if ($str[0][0] == "0" && $str[1][1] == "0" && $str[2][2] == "0") {
        return true;
    } else if ($str[0][2] == "0" && $str[1][1] == "0" && $str[2][0] == "0") {
        return true;
    } else {
        return false;
    }

}
function UTurn($str, $r)
{
    if ($r == 1) {
        $str[0][0] = "0";
    } else if ($r == 2) {
        $str[0][1] = "0";
    } else if ($r == 3) {
        $str[0][2] = "0";
    } else if ($r == 4) {
        $str[1][0] = "0";
    } else if ($r == 5) {
        $str[1][1] = "0";
    } else if ($r == 6) {
        $str[1][2] = "0";
    } else if ($r == 7) {
        $str[2][0] = "0";
    } else if ($r == 8) {
        $str[2][1] = "0";
    } else if ($r == 9) {
        $str[2][2] = "0";
    }
    return $str;
}

function store($str)
{
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $str[$i][$j] = 1;
        }
    }
    return $str;
}
function CTurn($str, $r)
{

    echo "coumputer takes: " . $r . "\n";

    if ($r == 1) {
        $str[0][0] = "X";
    } else if ($r == 2) {
        $str[0][1] = "X";
    } else if ($r == 3) {
        $str[0][2] = "X";
    } else if ($r == 4) {
        $str[1][0] = "X";
    } else if ($r == 5) {
        $str[1][1] = "X";
    } else if ($r == 6) {
        $str[1][2] = "X";
    } else if ($r == 7) {
        $str[2][0] = "X";
    } else if ($r == 8) {
        $str[2][1] = "X";
    } else if ($r == 9) {
        $str[2][2] = "X";
    }

    return $str;
}
function checkDuplicate($a, $r)
{
    if ($a[$r] == 0) {
        return true;
    } else {
        return false;
    }

}
