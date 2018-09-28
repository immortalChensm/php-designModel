<?php
	namespace Design\Pool;
	
	class StringReverseWorker
	{
	    private $createAt;
	    
	    public function __construct()
	    {
	        $this->createAt = new \DateTime();
	    }
	    
	    public function run($text)
	    {
	        return strrev($text);
	    }
	}
?>