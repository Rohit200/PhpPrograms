<?php
include 'Utility.php';
include 'LinkedList.php';
include 'Queue.php';
$l1 = new LinkedList();
$q1 = new Queue();
echo "Enter the month \n";
$month = getString();
echo "Enter the year \n";
$year = getString();

$d=0;
$day=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$months = array("", "January", "February", "March",
    "April", "May", "June", "July", "August", "September",
    "October", "November", "December");

$days = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
$date = $year."-".$month."-"."1";
 
$unixTimestamp = strtotime($date);

$dayOfWeek = date("l", $unixTimestamp);
for($i=0;$i<7;$i++)
{
  if($dayOfWeek==$day[$i] )
   $d=$i;
}
echo $dayOfWeek."\n";
if (filter_var($month, FILTER_VALIDATE_INT) || filter_var($year . FILTER_VALIDATE_INT)) {
    echo "   " . $months[$month] . " " . $year . "\n";
    $l1->addLast("S\tM\tTu\tW\tTh\tF\tS\n");

    for ($i = 0; $i < $d; $i++) {
        $l1->addLast("\t");
    }
    $n=leap($year);
    if ($month == 2 &&$n==1  ) {
        for ($i = 1; $i <= 29; $i++) {
            $l1->addLast($i . "\t");
            if ((($i + $d) % 7 == 0) || ($i == $days[$month])) {
                $l1->addLast("\n");
    }
}
}
else
{
    for ($i = 1; $i <= $days[$month]; $i++) {
        $l1->addLast($i . "\t");
        if ((($i + $d) % 7 == 0) || ($i == $days[$month])) {
            $l1->addLast("\n");
        }
    }
    }
    $k = $l1->size();
    for ($i = 1; $i <= $k; $i++) {
        $k1 = $l1->get($i);
        $q1->enqueue($k1);
    }
    for ($i = 1; $i <= $k; $i++) {
        $k1 = $q1->dequeue($k1);
        echo $k1;
    }
} else {
    echo "Enter onty integer value \n";
}
