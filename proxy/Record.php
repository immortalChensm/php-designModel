<?php
	namespace Design\Proxy;
	
	class Record
	{
	    private $data;
	    
	    public function __construct($data)
	    {
	        $this->data = $data;
	    }
	    
	    public function __set($key,$value)
	    {
	        $this->data[$key] = $value;
	    }
	    
	    public function __get($key){
	        if(!isset($this->data[$key])){
	            throw new \OutOfRangeException("不存在此索引");
	        }
	        return $this->data[$key];
	    }
	}
?>