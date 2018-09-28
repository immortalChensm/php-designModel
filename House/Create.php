<?php
	namespace Design\Builder\Part;
	
	abstract class Create
	{
	    private $part = [];
	    public function addPart($key,$value)
	    {
	        $this->part[$key] = $value;
	    }
	}
?>