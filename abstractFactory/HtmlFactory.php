<?php
	namespace Design\AbstractFactory;
	
	class HtmlFactory extends AbstractFactory
	{
	    public function createText($content)
	    {
	      
	        return new HtmlText($content);
	    }
	}
?>