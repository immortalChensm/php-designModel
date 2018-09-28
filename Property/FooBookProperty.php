<?php
	namespace Design\Property;
	
	class FooBookProperty extends BookProperty
	{
	    protected $category = "foo";
	    
	    public function __clone()
	    {
	        
	    }
	}
?>