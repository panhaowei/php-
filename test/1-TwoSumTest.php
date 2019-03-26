<?php

require_once  'leetcode'.DIRECTORY_SEPARATOR.'1-TwoSum.php';

class TestClass {
    public $nums = [2,7,11,15];
    public $target = 9;
    public function run(){
        $testClass = new Solution();
        return $testClass->twoSum($this->nums,$this->target);
    }
}
?>