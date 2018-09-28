<?php
	use Design\Property\BarBookProperty;
use Design\Property\FooBookProperty;
require 'BookProperty.php';
	require 'BarBookProperty.php';
	require 'FooBookProperty.php';
	
	$barBook = new BarBookProperty();
	$fooBook = new FooBookProperty();
	
	for($i=0;$i<100;$i++){
	    
	    $book = clone $barBook;
	    $book->setTitle($i);
	    echo $book->getTitle($i);
	}
	
	for($j=0;$j<10;$j++){
	    $book = clone $fooBook;
	    $book->setTitle($j);
	    echo $book->getTitle($j);
	}
	
	/**
	 * 原型模式
	 * 先造一个对象出来，剩下的全部克隆一份，节省创建对象的资源
	 * **/
?>