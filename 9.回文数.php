/*
 * @lc app=leetcode.cn id=9 lang=php
 *
 * [9] 回文数
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0){
            return false;
        }
        $x = (string)$x;

        $len = strlen($x) - 1;
        $flag = $len/2;
        $i = 0;
        while($i <= $flag){
            if($x[$i] != $x[$len-$i]){
                return false;
            }
            $i++;
        }
        return true;
    }
}
// @lc code=end

