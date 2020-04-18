<?php 
	//without object
	class shakil
	{
		const shakil_ahmed = "Gazipur is lock down<br>";
	}
	echo shakil::shakil_ahmed;

	//with object
	class rakib
	{
		const rakib_ahmed = "Gazipur is corona effected<br>";
	}
	$obj = new rakib;
	echo $obj::rakib_ahmed;


	class abid
	{
		const shakil_ahmed = "Gazipur is lock down<br>";
		public $shakil = "Hazaribag is lock down";

		public function asif()
	{
		return $this->shakil = "Shakil is a good boy<br>";
	}
}

	class jiniya
	{
		const jiniya_parvin = "Gazipur is locked down<br>";

		public function abir()
		{
			$this->jiniya_parvin = "Jiniya is a good girl";
			return $this->jiniya_parvin;
		}
	}

	
	$obj = new abid;
	echo $obj::shakil_ahmed;
	echo $obj->asif();
	$obj = new jiniya;
	echo $obj->abir();
 ?>