<?php
	namespace Design\Builder\Part;
	
	interface Builder
	{
	    public function createVehicle();
	    public function addDoors();
	    public function addEngine();
	    public function addWheel();
	    public function getVehicle();
	}
?>