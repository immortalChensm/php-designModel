<?php
	namespace Design\Factory;
	
	abstract class FactoryMethod
	{
	    const CHEAP = "cheat";
	    const FAST  = "fast";
	    abstract protected function createVehicle($type);
	    public function create($type)
	    {
	        $obj = $this->createVehicle($type);
	        $obj->setColor('black');
	        return $obj;
	    }
	}
?>