<?php
	namespace Design\Builder\Part;
	
	class TonyHouse extends House
	{
	    private $house;
	   
	    public function addDoors()
	    {
	        (new Doors())->addPart("防盗门", new Steel());
	    }
	    
	    public function addUnderground()
	    {
	        (new Underground())->addPart("地基", new Stone());
	    }
	    
	    public function addWall()
	    {
	        (new Wall())->addPart("墙", new Concreate());
	    }
	    
	    public function addWindow()
	    {
	        
	    }
	 
	}
?>