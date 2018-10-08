<?php
	use Design\Registry\Registry;
require 'Registry.php';
	
	$key = Registry::LOGGER;
	
	$logger = new stdClass();
	
	Registry::set($key, $logger);
	
	var_dump(Registry::get($key));
	
	Registry::set('foo', new stdClass());
	
	/**
	 * 注册模式
	 * 
	 * 目的是能够存储在应用程序中经常使用的对象实例，通常会使用只有静态方法的抽象类来实现（或使用单例模式）。
	 * 需要注意的是这里可能会引入全局的状态，我们需要使用依赖注入来避免它。
	 * **/
?>