/*
 * @lc app=leetcode.cn id=26 lang=php
 *
 * [26] 删除排序数组中的重复项
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $len = count($nums);
        if ($len <= 1) {
            return $len;
        }
        $i = 0;
        for($j=1;$j<$len;$j++){
            if($nums[$i] != $nums[$j]){
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i + 1;
    }
}
// @lc code=end

