<?php
	namespace Design\Builder\Part;
	
	interface Builder
	{
	    public function createHouse();
	    public function createUnderGround();
	    public function createWall();
	    public function createDoors();
	    public function createWindow();
	    public function getHouse();
	}
?>