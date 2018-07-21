<?php
include 'BankAccount.php';
include 'Utility.php';
include 'BankQueue.php';
$bque = new BankAccount();
$bq=new BankQueue();
echo "Enter 1 for Withdrawal \n
      2 for deposit \n
      3 for balance inquiry \n";
$n = getString();
if (filter_var($n, FILTER_VALIDATE_INT)) {
    switch ($n) {
        case 1:$bq->add();
              $k=$bq->size();
              echo $k."\n";
              echo "Enter the amount to withdrawal \n";
            $n = getString();
            if (filter_var($n, FILTER_VALIDATE_INT)) {
                $bque->withdrawal($n);
            } else {
                echo "Enter only numeric value \n";
            }
            $bq->exit();
            break;

        case 2:$bq->add();
               $k=$bq->size();
              echo "Enter the amount to deposit \n";
               $n = getString();
                 if (filter_var($n, FILTER_VALIDATE_INT)) {
                $bque->deposit($n);
            } else {
                echo "Enter only numeric value \n";
            }
            $bq->exit();
            break;

        case 3:$bq->add();
               $k=$bq->size();
               $bque->balanceinquiry();
               $bq->exit();
               break;

        default:echo "You have chosen wrong option \n";

    }
} else {
    echo "Enter only 1 or 2 or 3 \n";
}
