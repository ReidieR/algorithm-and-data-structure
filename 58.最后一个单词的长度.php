/*
 * @lc app=leetcode.cn id=58 lang=php
 *
 * [58] 最后一个单词的长度
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $len = strlen($s);
        if(!$len){
            return 0;
        }
        $count = 0;
        for($i=$len-1;$i>=0;--$i){
            if($s[$i] == " "){
                if($count == 0) continue;
                break;
            }
            $count++;

        }

        return $count;
    }
}
// @lc code=end

