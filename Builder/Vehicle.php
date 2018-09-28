<?php
	namespace Design\Builder\Part;
	
	abstract class Vehicle
	{
	    private $data = [];
	    
	    public function setPart($key,$value)
	    {
	        $this->data[$key] = $value;
	    }
	    
	    public function getPart()
	    {
	        return $this->data;
	    }
	}
?>