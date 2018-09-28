<?php
	namespace Design\Pool;
	
	class WorkerPool implements \Countable
	{
	    private $occuipeWorkers = [];
	    private $freeWorkers    = [];
	    
	    public function get()
	    {
	        if(count($this->freeWorkers) == 0){
	            $worker = new StringReverseWorker();
	        }else{
	            $worker = array_pop($this->freeWorkers);
	        }
	        
	        $this->occuipeWorkers[spl_object_hash($worker)] = $worker;
	        return $worker;
	    }
	    
	    public function dispose(StringReverseWorker $worker)
	    {
	        $key = spl_object_hash($worker);
	        if($this->occuipeWorkers[$key]){
	            unset($this->occuipeWorkers[$key]);
	            $this->freeWorkers[$key] = $worker;
	        }
	    }
	    
	    public function count()
	    {
	        return count($this->freeWorkers) + count($this->occuipeWorkers);
	    }
	}
?>