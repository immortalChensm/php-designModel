<?php
	namespace Design\FormatterInterface;
	
	class PlainTextFormmater implements FormatterInterface
	{
	    public function formmater($text)
	    {
	        return $text;
	    }
	}
?>