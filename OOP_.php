<?php 
	
	/**
	 * summary
	 */
	class OOP 
	{
	    /**
	     * summary
	     */

	    private $str="";

	    public function __construct()
	    {
	        
	    }

	    public function catchup($go){
	    	$this->str=$go;
	    	return $this;
	    }

	    public function capture($capture){
	    	$this->str.=$capture;
	    	return $this->str;
	    }

	}


	/**
	 * summary
	 */
	class OOP2 extends OOP
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	    

	    }

	    public function ring(){
	    return $this->catchup('first one &nbsp;')->capture('this added by second one');
		    	
	    }
	    


	}

	$o2=new OOP2();
	echo $o2->ring();
	

 ?>