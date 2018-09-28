<?php
	use Design\Builder\Part\CarBuilder;
use Design\Builder\Part\Director;
require 'Vehicle.php';
	require 'TruckVehicle.php';
	require 'CarVehicle.php';
	
	require 'Builder.php';
	require 'TruckBuilder.php';
	require 'CarBuilder.php';
	
	require 'Director.php';
	
	require 'Doors.php';
	require 'Wheel.php';
	require 'Engine.php';
	
	$carBuilder = new CarBuilder();
	$car = (new Director())->build($carBuilder);
	print_r($car->getPart());
	/**
	 * 建造者模式
	 * 一辆车【构成一辆车通过添加功能部件，可以添加的部件有车门，车胎，发动机引擎】
	 * ----一辆汽车【构造一辆汽车流程也是添加车门，车胎，发动机引擎组成】
	 * ----一辆货车【构造一辆货车流程也是添加车门，车胎，发动机引擎】
	 * 
	 * 建造一辆车【添加车门，车胎，发动机引擎，然后得到一辆车】
	 * ----一建设一辆货车
	 * ----建设一辆汽车
	 * 
	 * 
	 * 生产者【指定要生产的车辆类型，货车或是汽车】
	 * 
	 * 
	 * ***/
	
?>