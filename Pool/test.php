<?php
	use Design\Pool\WorkerPool;
require 'WorkerPool.php';
	require 'StringReverseWorker.php';
	
	$workerPool = new WorkerPool();
	$worker = $workerPool->get();
	echo $worker->run("chinese");
	
	/**
	 * 对象池
	 * 以数组变量保存对象的hash=》对象形式保存
	 * 以保证对象的唯一性
	 * 对象闲置池
	 * ------先从闲置池里取出对象，如果没有则造一个对象，得到的对象放入繁忙池里，并返回对象给客户端使用
	 * 对象繁忙池
	 * ------传递对象【进行hash处理，找到特定的对象并销毁从而节省空间】，同时将取出的对象放入闲置池里，避免多次创建对象
	 * 
	 * 对象池的功能
	 * 减少实例化的次数节省内存加快运行速度 
	 * **/
?>