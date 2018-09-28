<?php
	namespace Design\Factory;
	
	class CarMercaes implements Vehicle
	{
	    private $color;
	    public function setColor($color)
	    {
	        $this->color = $color;
	    }
	    
	    public function setAMT($turn)
	    {
	        
	    }
	    
	    public function getColor()
	    {
	        return $this->color;
	    }
	}
?>