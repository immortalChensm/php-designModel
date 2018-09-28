<?php
	namespace Design\Factory;
	
	class GermanFactory extends FactoryMethod
	{
	    protected function createVehicle($type)
	    {
	        switch ($type){
	            case self::CHEAP:
	                return new Bicycle();
	                break;
	            case self::FAST:
	                $car = new CarMercaes();
	                $car->setAMT("ok");
	                return $car;
	                break;
	            default:
	                throw new \InvalidArgumentException("参数错误");
	                break;
	        }
	    }
	}
?>