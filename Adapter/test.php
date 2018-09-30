<?php
	use Design\BookInterface\Book;
use Design\BookInterface\Kindle;
require 'BookInterface.php';
	require 'Book.php';
	require 'EBookInterface.php';
	require 'Kindle.php';
	
	require 'EBookAdapter.php';
	
	$book = new Book();
	$book->turnPage();
	echo $book->getPage();
	
	$kindle = new Kindle();
	$ebook = new Design\BookInterface\EBookAdapter($kindle);
	$ebook->turnPage();
	echo $ebook->getPage();
	/**
	 * 适配器模式
	 * 功能：用于兼容某个类的方法
	 * 书类：打开，下一页，获取页码
	 * 电子书类：打开，按下一页，获取页面
	 * 适配器类将会处理让纸质书和电子书类兼容
	 * **/
?>