<?php
include 'Utility.php';
echo "Enter 1 for CtoFconversation \n Enter 2 for FtoCconversation \n";
$n = getString();
if (filter_var($n, FILTER_VALIDATE_INT)) {
    switch ($n) {
        case 1:echo "Enter the temperature in celcius only \n";
            $t = getString();
            if (is_numeric($t)) {
                $t1 = CtoFconvert($t);
                echo "Temperature in Fahrenhiet is " . $t . "\n";
            } else {
                echo "Enter only numeric value \n";
            }

            break;

        case 2:echo "Enter the temperature in Fahrenhiet only \n";
            $t = getString();
            if (is_numeric($t)) {
                $t = FtoCconvert($t);
                echo "Temperature in celcius is " . $t . "\n";
            } else {
                echo "Enter only numeric value \n";
            }

            break;

        default:echo "You have chosen wrong option \n";

    }
} else {
    echo "Please enter ony 1 0r 2 \n";
}
