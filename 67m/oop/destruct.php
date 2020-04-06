<?php  


class demo
{

	public function __destruct()
    {
    	echo "Hello Bangladesh<br>";
    }
    
    public function __construct($amen)
    {
        echo "Hello $amen<br>";
    }

    public function shakil(){
    	echo "Ley Halua<br>";
    }

    public function ahmed(){
    	echo "Amar Bangladesh<br>";
    }
}

$obj = new demo("Shakil");
$obj->ahmed();
$obj->shakil();

?>