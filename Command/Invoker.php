<?php
	namespace Design\Command;
	
	class Invoker
	{
	    private $cmd;
	    
	    public function setCmd(CommandInterface $cmd)
	    {
	        $this->cmd = $cmd;
	    }
	    
	    public function run()
	    {
	        $this->cmd->execute();
	    }
	}
?>