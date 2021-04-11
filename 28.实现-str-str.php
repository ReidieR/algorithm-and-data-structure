/*
 * @lc app=leetcode.cn id=28 lang=php
 *
 * [28] 实现 strStr()
 */

// @lc code=start
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {

        $l = strlen($haystack);
        $n = strlen($needle);
        if($needleLen > $len){
            return -1;
        }
        for($i=0;$i<$l-$n+1;$i++){
            $str = substr($haystack,$i,$n);
            if($str == $needle){
                return $i;
            }
        }
        return -1;

    }
}
// @lc code=end

