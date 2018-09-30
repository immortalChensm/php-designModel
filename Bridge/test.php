<?php
	use Design\FormatterInterface\PlainTextFormmater;
require 'FormatterInterface.php';
	require 'PlainTextFormmater.php';
	require 'HtmlFormmater.php';
	
	require 'Service.php';
	require 'HellowService.php';
	
	$hello = new Design\FormatterInterface\HellowService(new PlainTextFormmater());
	echo $hello->get();
	
	/**
	 * 桥梁模式
	 * 格式化类【文本格式化，html格式化】
	 * 服务类
	 * ---helloWorld服务类
	 * 
	 * 具体实现在文本格式化，html格式化类里
	 * 服务类接受某个具体的类实现对外提供服务
	 * 
	 * **/
?>