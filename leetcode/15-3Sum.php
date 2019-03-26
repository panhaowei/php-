<?php
/**给定一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？找出所有满足条件且不重复的三元组。

注意：答案中不可以包含重复的三元组。

例如, 给定数组 nums = [-1, 0, 1, 2, -1, -4]，

满足要求的三元组集合为：
[
[-1, 0, 1],
[-1, -1, 2]
]*/

/**
 * 注：在leetcode上因有个非常大的测试用例，php提交一直超时，不开心。。。
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {

        sort($nums);//获得正序
        $sss = array_reverse($nums);//获得倒叙

        $count = count($sss);
        $counta= $count-1;
        $sum_double = [];

        for($s=0;$s<$count-2;$s++){
            if($nums[$s] === $nums[$s-1] && $nums[$s]!=0){  //如果重复跳出
                continue;
            }
            for($i=$s+1;$i<$count-1;$i++){
                $k = 0-$nums[$s]-$nums[$i];
                $ss =array_search($k, $sss);
                if($ss !== false && $ss + $i < $counta){
                    $sum_double[implode(",",[$nums[$s],$nums[$i],$k])] = [$nums[$s],$nums[$i],$k];
                }

            }
        }

        return $sum_double;
    }
}
?>