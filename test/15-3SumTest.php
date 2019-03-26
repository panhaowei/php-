<?php

require_once  'leetcode'.DIRECTORY_SEPARATOR.'15-3Sum.php';

class TestClass {
    public $nums = [-1,0,1,2,-1,-4];

    public function run(){
        $testClass = new Solution();
        return $testClass->threeSum($this->nums);
    }
}
?>