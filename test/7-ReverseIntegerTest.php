<?php

require_once  'leetcode'.DIRECTORY_SEPARATOR.'7-ReverseInteger.php';

class TestClass {
    public $x = 123;

    public function run(){
        $testClass = new Solution();
        return $testClass->reverse($this->x);
    }
}
?>