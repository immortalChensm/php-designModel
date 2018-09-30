<?php
	use Design\FluentInterface\Sql;
//use Design\FluentInterface\Design\FluentInterface;
require 'Sql.php';
	
	$sql = (new Sql())->select(['name','age'])->from('user','b')->where(['a','b']);
	echo $sql;
	
	/**
	 * 流接口模式
	 * **/
?>