<?php
	namespace Design\Composiste;
	
	class InputElement implements RenderableInterface
	{
	    public function render()
	    {
	        return "<input type='text'>";
	    }
	}
?>