<?php

class Bus {
	public $exploded = false;
	public $armed = false;
	
	function setSpeed($speed) {
		if ($speed > 50) {
			$this->armed = true;
		} else {
		if ($this->armed == true)
			$this->exploded = true;
		}
	}
	
	}
//}

$bus = new Bus();

if ($bus->armed == false) {
	echo "<b>The Movie Speed in PHP</b><br><br>";
}

//$bust_.setSpeed(65);
$bus->setSpeed(65);
if ($bus->armed == true) {
	echo "Speed OK so far<br>";
}

$bus->setSpeed(75);
if ($bus->armed == true) {
	echo "Speed OK<br>";
}

$bus->setSpeed(85);
if ($bus->armed == true) {
	echo "Speed still OK<br>";
}

$bus->setSpeed(95);
if ($bus->armed == true) {
	echo "High speed but OK<br>";
}

$bus->setSpeed(105);
if ($bus->armed == true) {
	echo "Ludicrous speed but OK<br>";
}

$bus->setSpeed(55);
if ($bus->armed == true) {
	echo "Losing speed but OK<br>";
}

$bus->setSpeed(51);
if ($bus->armed == true) {
	echo "Getting dangerously slow<br>";
}

$bus->setSpeed(51);
if ($bus->armed == true) {
	echo "Lost too much speed - Movie over.<br>";
}
/*
//$bust_.setSpeed(85);
$bus->setSpeed(85);
if ($bus->armed == true) {
	echo "Speed 2<br>";
}

//$bust_.setSpeed(105);
$bus->setSpeed(105)
if ($bus->armed == true) {
	echo "Speed 3<br>";
}

//$bust_.setSpeed(25);
$bus->setSpeed(25);
if ($bus->armed == true) {
	echo "Speed 4<br>";
}

//function eq() {
     return $this->bus;
   //}
 //}

//if ($bus->armed == true) {
	//echo "Movie over<br>";
//}

$bus->speed();
*/
?>
