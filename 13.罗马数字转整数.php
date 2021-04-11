/*
 * @lc app=leetcode.cn id=13 lang=php
 *
 * [13] 罗马数字转整数
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt(string $s){
  $special = ['IV','IX','XL','XC','CD','CM',];
  $map = [
    'I' => 1,
    'II' => 2,
    'III' => 3,
    'IV' => 4,
    'V' => 5,
    'IX' => 9,
    'X' => 10,
    'XL' => 40,
    'L' => 50,
    'XC' => 90,
    'C' => 100,
    'CD' => 400,
    'D' => 500,
    'CM' => 900,
    'M' => 1000
  ];
  $len = strLen($s)-1;
  $arr = [];
  $i = $len;
  while($i>=0){
    $j=$i-1;
    $k1 = $s[$i];
    if($j>=0){
      $k2 = $s[$j];
      $v = $k2.$k1;
      if(in_array($v,$special)){
        array_push($arr,$v);
        $i -= 2;
      }else{
        array_push($arr,$k1);
        $i--;
      }
    }else{
        array_push($arr,$k1);
        $i--;
    }
  }

  $res=0;
  foreach($arr as $val){
      $res += $map[$val];
  }
  return $res;
}
}
// @lc code=end

