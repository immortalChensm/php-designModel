<?php
	namespace Design\Builder\Part;
	
	class TruckBuilder implements Builder
	{
	    private $truck;
	    public function createVehicle()
	    {
	        $this->truck = new TruckVehicle();
	    }
	    
	    public function addDoors()
	    {
	        $this->truck->setPart("doors1", new Doors());
	    }
	    
	    public function addWheel()
	    {
	        $this->truck->setPart("wheel1", new Wheel());
	    }
	    
	    public function addEngine()
	    {
	        $this->truck->setPart("engine", new Engine());
	    }
	    
	    public function getVehicle()
	    {
	        return $this->truck;
	    }
	}
?>