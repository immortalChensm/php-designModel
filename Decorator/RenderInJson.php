<?php
	namespace Design\Decorator;
	
	class RenderInJson extends Decorator
	{
	    public function renderData()
	    {
	        return json_encode($this->wraper->renderData());
	    }
	}
?>