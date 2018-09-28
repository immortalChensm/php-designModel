<?php
	namespace Design\AbstractFactory;
	
	class JsonFactory extends AbstractFactory
	{
	    public function createText($content)
	    {
	        return new JsonText($content);
	    }
	}
?>