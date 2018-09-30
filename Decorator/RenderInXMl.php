<?php
	namespace Design\Decorator;
	
	class RenderInXMl extends Decorator
	{
	    public function renderData()
	    {
	        $doc = new \DOMDocument();
	        $data = $this->wraper->renderData();
	        $doc->appendChild($doc->createElement("content",$data));
	        return $doc->saveXML();
	    }
	}
?>