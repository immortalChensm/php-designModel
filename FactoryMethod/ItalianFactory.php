<?php
	namespace Design\Factory;
	
	class ItalianFactory extends FactoryMethod
	{
	    protected function createVehicle($type)
	    {
	        switch ($type) {
	            case self::CHEAP:
	                return new Bicycle();
	            break;
	            case self::FAST:
	                return new CarFerria();
	            default:
	                throw new \InvalidArgumentException("参数错误");
	            break;
	        }
	    }
	}
?>