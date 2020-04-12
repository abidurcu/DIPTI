<?php 
    class Dhaka
    {
        const hazaribagh = "Lock Down<br>";
        public $abir = "Lecturer<br>";

        public function asif(){
            return Dhaka::hazaribagh;
        }

        private function __construct()
        {
            
        }
    }
    // $obj = new Dhaka;
    echo Dhaka::hazaribagh;
    echo Dhaka::asif(); 
?>