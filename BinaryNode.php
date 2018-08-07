<?php
class BinaryNode
{
    public $value;
    public $left;     
    public $right;     

    public function __construct($item) {
        $this->value = $item;
        $this->left = NULL;
        $this->right = NULL;
    }
    public function dump() {
        if ($this->left !== NULL) {
            $this->left->dump();
        }
        echo $this->value."\n";
        if ($this->right !== NULL) {
            $this->right->dump();
        }
    }
}
?>