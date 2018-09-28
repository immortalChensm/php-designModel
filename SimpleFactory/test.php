<?php
	use Design\SimpleFactory\Factroy;
require 'SimpleFactory.php';
	require 'Bicycle.php';
	
	$factory = new Factroy();
	$bicycle = $factory->createBicycle();
	$bicycle->driveTo("北京路");
	
	/**
	 * 简单工厂模式
	 * 用一个工厂类的方法造出某一个类的对象返回给客户端使用
	 * **/
?>