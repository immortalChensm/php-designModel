<?php
	namespace Design\FlyWeight;
	
	class CharacterFlyWeight implements FlyWeightInterface
	{
	    private $name;
	    
	    public function __construct($name)
	    {
	        $this->name = $name;
	    }
	    
	    public function render($extra)
	    {
	        return sprintf("character %s with font is %s",$this->name,$extra);
	    }
	}
?>