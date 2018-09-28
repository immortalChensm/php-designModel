<?php
	namespace Design\Factory;
	
	class CarFerria implements Vehicle
	{
	    private $color;
	    
	    public function setColor($color)
	    {
	        $this->color = $color;
	    }
	}
?>