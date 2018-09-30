<?php
	require 'RenderDataInterface.php';
	require 'Webservice.php';
	require 'Decorator.php';
	require 'RenderInXMl.php';
	require 'RenderInJson.php';
	
	$webservice = new Design\Decorator\Webservice('hello,world');
	
	$json = new Design\Decorator\RenderInJson($webservice);
	echo $json->renderData();
	
	$xml = new Design\Decorator\RenderInXMl($webservice);
	echo $xml->renderData();
?>