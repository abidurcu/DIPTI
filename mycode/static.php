<?php 
	class Dhaka
	{
		const hazaribag = "Lock Down<br>";
		static $abir = "Lecturer<br>";

		public function asif()
		{
			return Dhaka::hazaribag;
		}

		private function __construct()
		{

		}
	}
	echo Dhaka::$abir;
	echo Dhaka::asif();
 ?>