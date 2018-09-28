<?php
	namespace Design\Builder\Part;
	
	class CarBuilder implements Builder
	{
	    private $car;
	    public function createVehicle()
	    {
	        $this->car = new CarVehicle();
	    }
	    
	    public function addDoors()
	    {
	        $this->car->setPart("doors1", new Doors());
	    }
	    
	    public function addWheel()
	    {
	        $this->car->setPart("wheel1", new Wheel());
	    }
	    
	    public function addEngine()
	    {
	        $this->car->setPart("engine", new Engine());
	    }
	    
	    public function getVehicle()
	    {
	        return $this->car;
	    }
	}
?>