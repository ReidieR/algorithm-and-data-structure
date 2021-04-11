/*
 * @lc app=leetcode.cn id=35 lang=php
 *
 * [35] 搜索插入位置
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $len = count($nums);
        if($target>$nums[$len-1]){
            return $len;
        }
        for($i=0;$i<$len;$i++){
            if($target == $nums[$i]){
                return $i;
            }
            if($nums[$i] > $target){
                return $i;
            }
        }

    }
}
// @lc code=end

