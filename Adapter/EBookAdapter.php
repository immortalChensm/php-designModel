<?php
	namespace Design\BookInterface;
	
	class EBookAdapter implements BookInterface
	{
	    private $ebook;
	    public function __construct(EBookInterface $ebook)
	    {
	        $this->ebook = $ebook;
	    }
	    
	    public function open()
	    {
	        $this->ebook->unlock();
	    }
	    
	    public function turnPage()
	    {
	        $this->ebook->pressPage();
	    }
	    
	    public function getPage()
	    {
	        return $this->ebook->getPage()[0];
	    }
	}
?>