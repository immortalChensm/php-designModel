<?php
	use Design\Composiste\Form;
use Design\Composiste\InputElement;
require 'RenderableInterface.php';
	require 'InputElement.php';
	require 'TextElement.php';
	require 'Form.php';
	
	$form = new Form();
	$form->addElement(new Design\Composiste\TextElement("email")); 
	$form->addElement(new InputElement());
	
	echo $form->render();
	
	/**
	 * 组合模式
	 * 接口类规定各个子类应该具有的方法，子类继承实现
	 * 当各个类的方法都一致时，可以采用组合模式
	 * 
	 * **/
?>