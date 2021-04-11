/*
 * @lc app=leetcode.cn id=88 lang=php
 *
 * [88] 合并两个有序数组
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {

        $p1 = $m-1;
        $p2 = $n-1;
        $p = $m+$n-1;

        while($p1>=0 && $p2>=0){
            if($nums1[$p1] < $nums2[$p2]){
                $nums1[$p--] = $nums2[$p2];
                $p2--;
            }else{
                $nums1[$p--] = $nums1[$p1];
                $p1--;
            }
        } 
        if($p2>=0){
            for($i=0;$i<=$p2;$i++){
                $nums1[$i] = $nums2[$i];
            }
        }
    }
}
// @lc code=end

