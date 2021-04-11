/*
 * @lc app=leetcode.cn id=136 lang=php
 *
 * [136] 只出现一次的数字
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $single = 0;
        foreach($nums as $val){
            $single ^= $val;
        }
        return $single;
    }
}
// @lc code=end

