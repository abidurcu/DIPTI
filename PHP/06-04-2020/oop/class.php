<?php  
	
	class batch67
	{
		public $abidur = "Abidur Rahman<br>";

	    public function abid(){
	    	return $this->abidur;
	    }

	    function jinia(){
	    	return "Bangladesh<br>";
	    }

	    function asif($dhaka){
	    	return $dhaka;
	    }

	    public function __construct()
	    {
	        
	    }
	}

	$obj = new batch67;
	echo $obj->jinia();
	$sir = "Asif Abir<br>";
	echo $obj->asif($sir);
	echo $obj->abidur;
	echo $obj->abid();

	$rakib = new batch67;
	echo $rakib->jinia();

	$shakil = new batch67();
	echo $shakil->jinia();
?>