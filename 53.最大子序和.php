/*
 * @lc app=leetcode.cn id=53 lang=php
 *
 * [53] 最大子序和
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $len = count($nums);
        // 最大值
        $max = $nums[0];    
        // 前置和
        $pre_sum = 0;
        for($i=0;$i<$len;$i++){
            if($pre_sum < 0){
                $pre_sum = $nums[$i];
            }else{
                $pre_sum = $nums[$i]+$pre_sum;
            }
            $max = max($max,$pre_sum);

        }   
        return $max;
    }
}
// @lc code=end

