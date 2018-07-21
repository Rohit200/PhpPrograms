<?php

class BankAccount
{
    public $minBalance = 1000;
    public $balance;
    public function __construct()
    {
        $this->balance = $this->minBalance;
    }

    public function withdrawal($amt)
    {
        $this->balance = $this->balance - $amt;
        if ($this->balance >= $this->minBalance) {
            echo "Withdrawal amount is " . $amt . "\n";
            echo "Balance is " . $amt . "\n";
        } else {
            echo "insufficient balance \n";
        }

    }
    public function deposit($amt)
    {
        echo "Deposit amount is " . $amt . "\n";
        $this->balance = $this->balance + $amt;
        echo "Total amount in your account is " . $this->balance . "\n";
    }
    public function balanceinquiry()
    {
        echo "Total amount in your account is " . $this->balance . "\n";
    }
}
