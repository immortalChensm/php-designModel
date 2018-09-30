<?php
	namespace Design\Decorator;
	
	class Webservice implements RenderDataInterface
	{
	    private $data;
	    
	    public function __construct($data)
	    {
	        $this->data = $data;
	    }
	    
	    public function renderData()
	    {
	        return $this->data;
	    }
	}
?>