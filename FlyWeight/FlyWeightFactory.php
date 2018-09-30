<?php
	namespace Design\FlyWeight;
	
	class FlyWeightFactory implements \Countable
	{
	    private $pool = [];
	    
	    public function get($name)
	    {
	        if(!isset($this->pool[$name])){
	            $this->pool[$name] = new CharacterFlyWeight($name);
	        }
	        return $this->pool[$name];
	    }
	    
	    public function count()
	    {
	        return count($this->pool);
	    }
	    
	}
?>