<?php

/**
 * Class Node
 * 链表元素
 */
class Node {
	/**
	 * 存储链表元素数据
	 * @var string Node data
	 */
	public $data = '';
	
	/**
	 * 指向下一个元素的地址
	 * @var self next Node
	 */
	public $next = null;
	
	/**
	 * 构造方法, 自动插入数据
	 * @param $data
	 * @param null $next
	 */
	public function __construct($data, $next = null)
	{
		$this->data = $data;
		$this->next = $next;
	}
}

