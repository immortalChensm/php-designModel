<?php
	use Design\Singleton\singleton;
require 'singleton.php';
	
	$singleton = singleton::getInstance();
	$singleton->show();
	
	$singleton = singleton::getInstance();
	$singleton->show();
	
	/**
	 * 单例模式
	 * 节省创建对象的次数与对象池类似
	 * 节省对象的创建次数
	 * 对象池
	 * 单例
	 * 原型【克隆对象】
	 * **/
?>