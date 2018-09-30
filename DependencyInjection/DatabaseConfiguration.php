<?php
	namespace Design\DependencyInjection;
	
	class DatabaseConfiguration
	{
	    private $password;
	    private $host;
	    private $port;
	    private $username;
	    
	    public function __construct($password,$host,$port,$username)
	    {
	        $this->password = $password;
	        $this->host = $host;
	        $this->port = $port;
	        $this->username = $username;
	    }
	    
	    public function getPassword()
	    {
	        return $this->password;
	    }
	    
	    public function getHost()
	    {
	        return $this->host;
	    }
	    
	    public function getPort()
	    {
	        return $this->port;
	    }
	    
	    public function getUsername()
	    {
	        return $this->username;
	    }
	}
?>