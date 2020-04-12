<?php 
    class Dhaka
    {
        const hazaribagh = "Lock Down<br>";
        static public $abir = "Lecturer<br>";

        public function asif(){
            return Dhaka::hazaribagh;
        }

        private function __construct()
        {
            
        }
    }
    // $obj = new Dhaka;
    echo Dhaka::$abir;
    echo Dhaka::asif(); 
?>