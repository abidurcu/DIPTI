<?php 
	class Dhaka
	{
		const hazaribag = "Lock Down";
	}
	echo Dhaka::hazaribag;
 ?>
<br>
 <?php 
	class khulna
	{
		const hazaribag = "Lock Down";

		public function asif()
		{
			return khulna::hazaribag;
		}
	}
	echo khulna::asif();
 ?>