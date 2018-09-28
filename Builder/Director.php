<?php
	namespace Design\Builder\Part;
	
	class Director
	{
	    public function build(Builder $builder)
	    {
	        $builder->createVehicle();
	        $builder->addDoors();
	        $builder->addWheel();
	        $builder->addEngine();
	        return $builder->getVehicle();
	    }
	}
?>