<!DOCTYPE html>
<html>
<head>
	<title>
		good to code
	</title>
</head>
<body>
<?php

class Person {
	public $color;
	pubic $weight;
	private $year;
	private $availableColors = ['red','green','blue','white'];

	public function getYear($year)
	{
		return $this->year = $year;
	}
	function getYear()
	{
		return $this->year;
	}
	function setColor($color){
		if(in_array($color,$this.availableColors)){
		$this->color = $color;
}
	}
}

$myCar = new Car();

?>
</body>
</html>