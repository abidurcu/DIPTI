<?php  
	
	class dhaka
	{
		public $city;   
		public $country;   
	    public function __construct()
	    {
	        $this->city = "Dhaka is athe capital of Bangladesh<br>";
	    }
	    public function country(){
	    	$this->country = "Bangladesh is our country<br>";
	    }
	}

	$obj = new dhaka;
	echo $obj->city;
	$obj->country();
	echo $obj->country;

	
	class corona
	{
	    public function corona($data){
	    	echo "Narayonganj is $data effected";
	    }
	}

	$corona = new corona("corona");
?>