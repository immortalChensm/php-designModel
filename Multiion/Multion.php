<?php
	namespace Design\Multion;
	
	final class Multion
	{
	    const INSTANCE_1 = 1;
	    const INSTANCE_2 = 2;
	    private static $instance = [];
	    private function __construct(){}
	    
	    public static function getInstance($instanceName)
	    {
	        if (!isset(self::$instance[$instanceName])){
	            self::$instance[$instanceName] = new self();
	        }
	        return self::$instance[$instanceName];
	    }
	    
	    private function __clone(){}
	    private function __wakeup(){}
	    public function show()
	    {
	        return 'hi';
	    }
	}
?>