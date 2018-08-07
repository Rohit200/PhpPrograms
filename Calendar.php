<?php
include 'Utility.php';
echo "Enter the month \n";
$month = getString();
echo "Enter the year \n";
$year = getString();
$d=0;

if($month>0 and $year>0)
{
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
    echo "S\tM\tTu\tW\tTh\tF\tS\n";

    for ($i = 0; $i < $d; $i++) {
        echo "\t";
    }
    $n=leap($year);
    if ($month == 2 &&$n==1  ) {
        for ($i = 1; $i <= 29; $i++) {
            echo $i . "\t";
            if ((($i + $d) % 7 == 0) || ($i == $days[$month])) {
                echo "\n";
            }
        }
        }
else
{
    for ($i = 1; $i <= $days[$month]; $i++) {
        echo $i . "\t";
        if ((($i + $d) % 7 == 0) || ($i == $days[$month])) {
            echo "\n";
        }
    }
    }
} else {
    echo "Enter onty integer value \n";
}
}
else
echo "Enter the month and year greater than zero \n";
?>