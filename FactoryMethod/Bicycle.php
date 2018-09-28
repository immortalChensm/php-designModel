<?php
	namespace Design\Factory;
	
	class Bicycle implements Vehicle
	{
	    private $color;
	    
	    public function setColor($color)
	    {
	        $this->color = $color;
	    }
	}
?>