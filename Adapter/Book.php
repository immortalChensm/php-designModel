<?php
	namespace Design\BookInterface;
	
	class Book implements BookInterface
	{
	    private $page;
	    
	    public function open()
	    {
	        $this->page = 1;
	    }
	    
	    public function turnPage()
	    {
	        $this->page++;
	    }
	    
	    public function getPage()
	    {
	        return $this->page;
	    }
	}
?>