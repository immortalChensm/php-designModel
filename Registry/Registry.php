<?php
	namespace Design\Registry;
	
	abstract class Registry
	{
	    const LOGGER = "logger";
	    
	    private static $storedValues = [];
	    private static $allowsKeys = [
	        self::LOGGER
	    ];
	    
	    public static function set($key,$value)
	    {
	        if(!in_array($key, self::$allowsKeys)){
	            throw new \InvalidArgumentException("设置的键无效");
	        }
	        self::$storedValues[$key] = $value;
	    }
	    
	    public static function get($key)
	    {
	        if (!in_array($key, self::$allowsKeys) || !isset(self::$storedValues[$key])){
	            throw new \InvalidArgumentException("invalid key given");
	        }
	        return self::$storedValues[$key];
	    }
	}
?>