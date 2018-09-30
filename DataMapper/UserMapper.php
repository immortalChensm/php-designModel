<?php
	namespace Design\DataMapper;
	
	class UserMapper
	{
	    private $adapter;
	    
	    public function __construct(StorageAdapter $adapter)
	    {
	        $this->adapter = $adapter;
	    }
	    
	    public function findById($id)
	    {
	        $reulst = $this->adapter->find($id);
	        if(null === $reulst){
	            throw new \InvalidArgumentException("参数错误");
	        }
	        
	        return $this->mapRowToUser($reulst);
	        
	    }
	    
	    public function mapRowToUser($data)
	    {
	        return User::fromState($data);
	    }
	}
?>