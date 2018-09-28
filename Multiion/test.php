<?php
	require 'Multion.php';
	use Design\Multion\Multion;

	//$obj = new Multion();
	
	//$class = clone new Multion();
	
	//$obj = new Multion();
	//echo serialize($obj);
	
	$obj = Multion::getInstance(Multion::INSTANCE_1);
	echo $obj->show();
	
	/**
	 * 多例模式 根据参数造出自己，返回自己的实例对象
	 * **/
?>