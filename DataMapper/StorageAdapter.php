<?php
	namespace Design\DataMapper;
	
	class StorageAdapter
	{
	    private $data = [];
	    
	    public function __construct($data)
	    {
	        $this->data = $data;
	    }
	    
	    public function find($id)
	    {
	        if(isset($this->data[$id])){
	            return $this->data[$id];
	        }
	        return null;
	    }
	}
?>