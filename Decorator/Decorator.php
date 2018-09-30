<?php
	namespace Design\Decorator;
	
	abstract class Decorator implements RenderDataInterface
	{
	    protected  $wraper;
	    
	    public function __construct(Webservice $wraper)
	    {
	        $this->wraper = $wraper;
	    }

	}
?>