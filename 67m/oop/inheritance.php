<?php  
	
	class dada
	{
		public $masjid = "Infinite<br>";
	    protected $bari = "50M<br>";
	    private $kongkal = "unknown<br>";

	    public function __construct()
	    {
	        
	    }

	    public function old(){
	    	return $this->kongkal;
	    }
	}
	
	class baba extends dada
	{
	    
	    public function __construct()
	    {
	        
	    }

	    public function namaz(){
	    	return $this->masjid;
	    }

	    public function bari(){
	    	return $this->bari;
	    }

	    /*
	    public function kongkal(){
	    	return $this->kongkal;
	    }
	    */
	}
	$dada_obj = new dada;
	echo $dada_obj->masjid;
	echo $dada_obj->old();
	//echo $dada_obj->bari;
	$baba_obj = new baba;
	echo $baba_obj->namaz();
	echo $baba_obj->bari();
	//echo $baba_obj->kongkal();
?>