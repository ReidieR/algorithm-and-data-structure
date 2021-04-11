/*
 * @lc app=leetcode.cn id=3 lang=php
 *
 * [3] 无重复字符的最长子串
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $max = 0;
        $lower = 0;
        $l = strlen($s);
        for($lower;$lower<$l;$lower++){
            $fast = $lower+1;
            while($fast<=$l-1){
                if(substr($s,$fast,1) == substr($s,$lower,1)){
                    $len = $fast - $lower;
                    $max = max($max,$len);
                    break;
                }
                ++$fast;
            }
            if($fast >= $l){
                $len = $fast - $lower;
                $max = max($max,$len);
                break;
            }
            if($l-$lower < $max){
                return $max;
                break;
            }
        }

        return $max;
    }
}
// @lc code=end

