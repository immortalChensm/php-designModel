<?php
	namespace Design\Composiste;
	
	class Form implements RenderableInterface
	{
	    private $elements = [];
	    
	    public function render()
	    {
	        $formCode = "<form>";
	        foreach($this->elements as $element){
	            $formCode.=$element->render();
	        }
	        $formCode.="</form>";
	        return $formCode;
	    }
	    
	    public function addElement($element)
	    {
	        $this->elements[] = $element;
	    }
	    
	}
?>