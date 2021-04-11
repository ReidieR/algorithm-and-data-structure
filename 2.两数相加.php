/*
 * @lc app=leetcode.cn id=2 lang=php
 *
 * [2] 两数相加
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $flag = 0;
        $head = null;
        $tail = null;
        while($l1 || $l2){
            $vl1=0;
            $vl2=0;
            if($l1){
                $vl1 = $l1->val;
            }
            if($l2){
                $vl2 = $l2->val;
            }
            $v = $vl1 + $vl2 + $flag;
            $flag = floor($v/10);
 
            if(!$head){
                $head = $tail = new ListNode($v % 10);
            }else{
                $tail->next = new ListNode($v % 10);
                $tail = $tail->next;
            }

            if ($l1) {
                $l1 = $l1->next;
            }
            if ($l2) {
                $l2 = $l2->next;
            }
        }
        if($flag>0){
            $tail->next = new ListNode($flag);
        }
        return $head;
    }
}
// @lc code=end

