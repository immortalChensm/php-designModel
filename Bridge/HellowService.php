<?php
	namespace Design\FormatterInterface;
	
	class HellowService extends Service
	{
	    public function get()
	    {
	        return $this->implements->formmater("hello,world");
	    }
	}
?>