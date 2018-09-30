<?php
	namespace Design\Composiste;
	
	class TextElement implements RenderableInterface
	{
	    private $text;
	    public function __construct($text)
	    {
	        $this->text = $text;
	    }
	    public function render()
	    {
	        return $this->text;
	    }
	}
?>