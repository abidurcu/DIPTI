<?php  
	
	//public
	//private
	//protected
	class am
	{
	    public $akbar  = "Mughol Shomrat<br>";
	    protected $pori_bibi = "Lalbag Kella<br>";
	    private $bongo_bondhu = "Jatir Jonok<br>";
	    public function __construct()
	    {
	        
	    }

	    public function gazipur(){
	    	return $this->pori_bibi;
	    }

	    public function sheikh(){
	    	return $this->bongo_bondhu;
	    }

	    protected function shakil(){
	    	echo "The king of Gazipur<br>";
	    }

	    public function ahmed(){
	    	return $this->shakil();
	    }
	}

	$obj = new am;
	echo $obj->akbar;
	//echo $obj->pori_bibi;
	echo $obj->gazipur();
	//echo $obj->bongo_bondhu;
	echo $obj->sheikh();
	//echo $obj->shakil();
	echo $obj->ahmed();
?>