<?php
	namespace Design\Command;
	
	class DateTime implements  CommandInterface
	{
	    private $console;
	    
	    public function __construct(Receiver $console)
	    {
	        $this->console = $console;
	    }
	    
	    public function execute()
	    {
	        $this->console->write(date("Y-m-d H:i:s",time()));
	    }
	}
?>