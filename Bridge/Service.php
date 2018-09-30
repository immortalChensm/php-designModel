<?php
	namespace Design\FormatterInterface;
	
	abstract class Service
	{
	    protected  $implements;
	    
	    public function __construct($pointer)
	    {
	        $this->implements = $pointer;
	    }
	    
	    public function SetImplements($pointer)
	    {
	        $this->implements = $pointer;
	    }
	    
	    abstract public function get();
	}
?>