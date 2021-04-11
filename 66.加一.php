/*
 * @lc app=leetcode.cn id=66 lang=php
 *
 * [66] 加一
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $l = count($digits)-1;
        while($l>=0){
            if($digits[$l]+1 == 10){
                $digits[$l] = 0;
                $l--;
            }else{
                $digits[$l] = $digits[$l] + 1;
                break;
            }         
        }
        if($l == -1 && $digits[0] == 0){
            array_unshift($digits,1);
        }
        return $digits;
    }
}
// @lc code=end

