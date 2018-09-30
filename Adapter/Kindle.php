<?php
	namespace Design\BookInterface;
	
	class Kindle implements EBookInterface
	{
	    private $page = 1;
	    private $totalPages = 100;
	    
	    public function unlock()
	    {
	        
	    }
	    public function pressPage()
	    {
	        $this->page++;
	    }
	    
	    public function getPage()
	    {
	        return [$this->page,$this->totalPages];
	    }
	}
?>