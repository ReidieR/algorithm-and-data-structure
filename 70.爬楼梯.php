/*
 * @lc app=leetcode.cn id=70 lang=php
 *
 * [70] 爬楼梯
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if($n <= 2){
            return $n;
        }
        $f1 = 1;
        $f2 = 2;
        for($i=3;$i<=$n;$i++){
            $fn = $f1+$f2;
            $f1 = $f2;
            $f2 = $fn;
        }
        return $fn;
    }
}
// @lc code=end

