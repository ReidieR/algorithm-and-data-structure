/*
 * @lc app=leetcode.cn id=20 lang=php
 *
 * [20] 有效的括号
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    { 
        $len = strlen($s);
        if($len === 0){
            return true;
        }
        if($len%2 != 0){
            return false;
        }
        $pos = [
            '[]','()','{}','??'
        ];
        $res = ['?'];
        for($i=0;$i<=$len-1;$i++){
            array_push($res,$s[$i]);
		    $res_len = count($res);
            $tmp = $res[$res_len-2].$res[$res_len-1];
            if(in_array($tmp,$pos)){
                array_pop($res);
                array_pop($res);
            }	
        }
        $flag = count($res);
        if($flag === 1){
            return true;
        }else{
            return false;
        }
    }
}
// @lc code=end

