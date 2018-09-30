<?php
	namespace Design\StaticFactory;
	
	final class StaticFactory 
	{
	    public static function factory($type)
	    {
	        if($type == 'number'){
	            return new NumberString();
	        }
	        if($type == 'string')
	        {
	            return new StringFormatter();
	        }
	        throw new \InvalidArgumentException("参数无效");
	    }
	}
?>