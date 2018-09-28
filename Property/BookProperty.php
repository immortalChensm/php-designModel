<?php
	namespace Design\Property;
	
	abstract class BookProperty
	{
	    private $title;
	    protected  $category;
	    
	    abstract public function __clone();
	    public function setTitle($title)
	    {
	        $this->title = $title;
	    }
	    
	    public function getTitle($title)
	    {
	        return $this->title;
	    }
	}
?>