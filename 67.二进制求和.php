/*
 * @lc app=leetcode.cn id=67 lang=php
 *
 * [67] 二进制求和
 */

// @lc code=start
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $a = str_split($a);
        $b = str_split($b);
        $la = count($a)-1;
        $lb = count($b)-1;
        $tmp = [];
        $l = '';
        if($la >= $lb){
            $l=$la;
        }else{
            $l = $lb;
            $lb = $la;
            $la = $l;
            $tmp = $b;
            $b = $a;
            $a = $tmp;
        }
        $sums = [];
        for($i=$l;$i>=0;$i--){
            if($lb>=0){
                $sum = $a[$i]+$b[$lb];
            }else{
                $sum = $a[$i];
            }
            if($sum>=2 && $i >=1){
                $sum = $sum-2;
                $a[$i-1]++;
            }
            array_unshift($sums,$sum);
            $lb--;
        }
        if($i == -1 && $sums[0]>=2){
            $sums[0] = $sums[0]-2;
            array_unshift($sums,1);
        }
        $sums = implode('',$sums);
        return $sums;
    }
}
// @lc code=end

