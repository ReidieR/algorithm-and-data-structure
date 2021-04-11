/*
 * @lc app=leetcode.cn id=19 lang=php
 *
 * [19] 删除链表的倒数第N个节点
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
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $dummy = new ListNode(0,$head);
        $first = $dummy;
        $second = $dummy;
        $n = $n+1;
        while($n){
            $first = $first->next;
            $n--;
        }
        while($first){
            $first = $first->next;
            $second = $second->next;
        }
        $second->next = $second->next->next;
        return $dummy -> next;
    }
}
// @lc code=end

