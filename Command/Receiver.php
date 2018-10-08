<?php
	namespace Design\Command;
	
	class Receiver
	{
	    private $enableData;
	    
	    private $output = [];
	    
	    public function write($str)
	    {
	        if ($this->enableData){
	            $str.='['.date('Y-m-d').']';
	        }
	        $this->output[] = $str;
	    }
	    
	    public function output()
	    {
	        return join("\n", $this->output);
	    }
	    
	    public function enableData()
	    {
	        $this->enableData = true;
	    }
	    
	    public function disableData()
	    {
	        $this->enableData = false;
	    }
	}
?>