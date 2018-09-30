<?php
	namespace Design\FormatterInterface;
	
	class HtmlFormmater implements FormatterInterface
	{
	    public function formmater($text)
	    {
	        return sprintf('<p>%s</p>',$text);
	    }
	}
?>