/*
 * @lc app=leetcode.cn id=509 lang=php
 *
 * [509] 斐波那契数
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {
        if($n<=1){
            return $n;
        }
        $f1 = 0;
        $f2 = 1;
        for($i=2;$i<=$n;$i++){
            $fn = $f1+$f2;
            $f1 = $f2;
            $f2 = $fn;
        }
        return $fn;
    }
}
// @lc code=end

