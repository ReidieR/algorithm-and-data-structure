/*
 * @lc app=leetcode.cn id=38 lang=php
 *
 * [38] 外观数列
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        if($n == 1){
        return "1";
    }
    $str = "1";

    for($i=1;$i<$n;$i++){
        $len = strlen($str);
        $count = 1;
        $res = '';
        for($j=1;$j<=$len;$j++){
            if($str[$j-1] == $str[$j]){
                $count++;
            }else{
                $res .= $count.$str[$j-1];
                $count = 1;
            }
        }
        $str = $res;
    }
    return (string)$res;
}


}
// @lc code=end

