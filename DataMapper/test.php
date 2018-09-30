<?php
	require 'User.php';
	require 'StorageAdapter.php';
	require 'UserMapper.php';
	
	$userAdapter = new Design\DataMapper\StorageAdapter(['1'=>['username'=>'tony','email'=>'1655664358@qq.com']]); 
	
	$userMapper = new Design\DataMapper\UserMapper($userAdapter);
	echo $userMapper->findById(1)->getUsername();
	
	/**
	 * 数据映射模式
	 * 具体的数据对象类
	 * 适配器类
	 * 映射类
	 * 适配器保存输入的参数
	 * 映射类根据参数查找保存的数据，并遇到到某个类对象返回，最终返回的是一个对象【输入的参数往往是某一个类事物】
	 * 
	 * **/
?>