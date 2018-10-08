<?php
	namespace Design\Proxy;
	
	class RecordProxy extends Record
	{
	    private $isDirty = false;
	    private $isInitlized = false;
	    
	    public function __construct(Array $data)
	    {
	        parent::__construct($data);
	        if(count($data)>0){
	            $this->isDirty = true;
	            $this->isInitlized = true;
	        }
	    }
	    
	    public function __set($key,$value)
	    {
	        parent::__set($key, $value);
	        $this->isDirty = true;
	    }
	    
	    public function isDirty()
	    {
	        return $this->isDirty;
	    }
	}
?>