<?php
	namespace Design\DataMapper;
	
	class User
	{
	    private $email;
	    private $username;
	    
	    public static function fromState($state)
	    {
	        return new self($state['username'], $state['email']);
	    }
	    
	    public function __construct($username,$email)
	    {
	        $this->email = $email;
	        $this->username = $username;
	    }
	    
	    public function getUsername()
	    {
	        return $this->username;
	    }
	    
	    public function getEmail()
	    {
	        return $this->email;
	    }
	}
?>