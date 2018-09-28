<?php
	use Design\AbstractFactory\HtmlFactory;
use Design\AbstractFactory\JsonFactory;
require_once 'AbstractFactory.php';
	require_once 'HtmlFactory.php';
	require_once 'JsonFactory.php';
	
	require_once 'Text.php';
	require_once 'JsonText.php';
	require_once 'HtmlText.php';
	
	$htmlFactory = new HtmlFactory();
	$htmlText = $htmlFactory->createText("hello");
	echo $htmlText->getText();
	
	$jsonFactory = new JsonFactory();
	$jsonText = $jsonFactory->createText('json');
	echo $jsonText->getText();
?>