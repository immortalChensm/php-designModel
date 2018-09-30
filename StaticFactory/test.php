<?php
	use Design\StaticFactory\StaticFactory;
require 'StaticFactory.php';
	require 'FormatterInterface.php';
	require 'StringFormatter.php';
	require 'NumberString.php';
	
	$number = StaticFactory::factory('number');
	echo $number->formatter();
	/**
	 * 静态工厂模式 根据参数实例化不同的对象返回
	 * 抽像工厂模式 各个工厂造各自的对象返回
	 * 简单工厂模式 工厂造个对象返回
	 * 
	 * **/
?>