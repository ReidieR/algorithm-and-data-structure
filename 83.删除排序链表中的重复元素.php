/*
 * @lc app=leetcode.cn id=83 lang=php
 *
 * [83] 删除排序链表中的重复元素
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
     * @return ListNode
     */
    function deleteDuplicates($head) {
        if($head->next == null || $head == null){
            return $head;
        }
        $dummy = new ListNode(0,$head);
        $cur = $dummy->next;
        while($cur->next){
            $curVal = $cur->val;
            $nextVal = $cur->next->val;
            if($curVal == $nextVal){
                $cur->next = $cur->next->next;
            }else{
                $cur = $cur -> next;
            }
            
        }

        return $dummy->next;

    }
}
// @lc code=end

