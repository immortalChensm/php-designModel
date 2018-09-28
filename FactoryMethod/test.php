<?php
	use Design\Factory\GermanFactory;
require 'Vehicle.php';
	require 'CarFerria.php';
	require 'CarMercaes.php';
	
	require 'FactoryMethod.php';
	require 'ItalianFactory.php';
	require 'GermanFactory.php';
	require 'Bicycle.php';
	
	$germanFactory = new GermanFactory();
	$car = $germanFactory->create("fast");
	echo $car->getColor();
	
	/**
	 * 工厂方法模式
	 * 工厂造车【不管哪个国家的造车厂都能制造自行车，汽车】
	 * 工厂方法类
	 * 意大利工厂类
	 * 德国工厂类
	 * 车辆类
	 * 奔驰车辆类
	 * 法拉利车辆类
	 * 自行车类
	 * 
	 * 工厂方法模式根据传递，生成不同工厂的汽车或是自行车类对象
	 * 
	 * **/
?>