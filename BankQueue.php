<?php
class BankQueue
{
    public $count = 0;
    public $size = 10;
    public $queue;
    public function __construct()
    {
        $queue = array();
    }
    public function add()
    {
        if ($this->count < $this->size) {
            $this->count++;
            echo "Size of queue is " . $this->count . "\n";
        }
    }
    function exit() {
        if ($this->count > 0) {
            $this->count--;
            echo "Size of queue is " . $this->count . "\n";
        }
    }
    public function size()
    {
        return $this->count;
    }
    public function isEmpty()
    {
        return $this->count == 0;
    }
    public function isFull()
    {
        return $this->count == 10;
    }
}
