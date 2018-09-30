<?php
	namespace Design\DependencyInjection;
	
	class DatabaseConnection
	{
	    private $config;
	    
	    public function __construct(DatabaseConfiguration $config)
	    {
	        $this->config = $config;
	    }
	    
	    public function getDsn()
	    {
	        return sprintf("%s:%s@%s:%d",$this->config->getUsername(),$this->config->getPassword(),$this->config->getHost(),$this->config->getPort());
	    }
	}
?>