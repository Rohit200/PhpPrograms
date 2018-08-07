<?php
include 'BinaryNode.php';
class BinarySearchTree
{
    protected $root; 

    public function __construct() {
        $this->root = NULL;
    }

    public function isEmpty() {
        return $this->root == NULL;
    }
    public function insert($item) {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            $this->root = $node;
        }
        else {
            $this->insertNode($node, $this->root);
        }
    }
  
    public function insertNode($node, &$subtree) {
        if ($subtree == null) {
            $subtree = $node;
        }
        else{
            if ($node->value > $subtree->value) {
                $this->insertNode($node, $subtree->right);
            }
            else if ($node->value < $subtree->value) {
                $this->insertNode($node, $subtree->left);
            }
            else {
                // reject duplicates
            }
        }
    }
    public function traverse() {
        $this->root->dump();
    }
}
?>