<?php
	require 'DatabaseConfiguration.php';
	require 'DatabaseConnection.php';
	
	$config = new Design\DependencyInjection\DatabaseConfiguration('123456', '127.0.0.1', 8080, 'jack');
	
	$connection = new Design\DependencyInjection\DatabaseConnection($config);
	echo $connection->getDsn();
?>