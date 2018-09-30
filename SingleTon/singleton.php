<?php
	namespace Design\Singleton;
	
	final class singleton
	{
	    private static $singleton;
	    
	    private function __construct(){
	        echo '我执行了';
	    }
	    private function __clone(){}
	    private function __wakeup(){}
	    
	    public static function getInstance()
	    {
	        if(null === self::$singleton){
	            self::$singleton = new self();
	        }
	        return self::$singleton;
	    }
	    
	    public function show()
	    {
	        echo 'i am show';
	    }
	}
?>