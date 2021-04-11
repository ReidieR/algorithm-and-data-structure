/*
 * @lc app=leetcode.cn id=14 lang=php
 *
 * [14] 最长公共前缀
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if(count($strs) == 0){
            return "";
        }
        $first = array_shift($strs);
        if($first == ''){
            return  $first;
        }
        $first = str_split($first);
        foreach($strs as $k => $v){
            $v = str_split($v);
            $first_len = count($first);
            $v_len = count($v);
            $tmp = [];
            $len = $first_len;
            if($first_len>$v_len){
            $tmp = $v;
            $v = $first;
            $first = $tmp; 
            $len = $v_len;
            }
            $tmp_res = [];
            for($i=0;$i<=$len;$i++){
            if($first[$i] == $v[$i]){
                array_push($tmp_res,$first[$i]);
            }else{
                break;
            }
            }
            $first = $tmp_res;
        }
        $res = implode('',$first);
        return $res;
    }
}
// @lc code=end

