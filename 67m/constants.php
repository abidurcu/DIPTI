<?php 
    class shakil {
        const shakil_ahmed = "Gazipur is locked down<br>";
        public $shakil = "Hazaribag is locked down";

        public function __construct()
	    {
	        
        }
        
        public function asif()
        {
            $this->shakil = "Shakil is a good boy";
            return $this->shakil;
        }
    }
    $obj = new shakil;
    // echo $obj::shakil_ahmed;
    echo shakil::shakil_ahmed;
    echo $obj->asif();
?>