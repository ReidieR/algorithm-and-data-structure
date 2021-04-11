/*
 * @lc app=leetcode.cn id=27 lang=php
 *
 * [27] 移除元素
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
      
        $len = count($nums);
        $i = 0;
        for($j=0;$j<$len;$j++){
            if($val != $nums[$j]){
                $nums[$i] = $nums[$j];
                $i++;
            }
        }
        return $i;

    }
}
// @lc code=end

