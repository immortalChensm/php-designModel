<?php
	namespace Design\Command;
	
	class HelloCommand implements CommandInterface
	{
	    private $output;
	    
	    public function __construct(Receiver $console)
	    {
	        $this->output = $console;
	    }
	    
	    public function execute()
	    {
	        $this->output->write("hello,world");
	    }
	}
?>