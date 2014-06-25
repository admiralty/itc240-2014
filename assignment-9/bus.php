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

if ($bus->armed ==false) {
	echo "Speed<br>";
}

$bust_.setSpeed(60);
if ($bus->armed == true) {
	echo "Speed 1<br>";
}

$bust_.setSpeed(80);
if ($bus->armed == true) {
	echo "Speed 2<br>";
}

$bust_.setSpeed(20);
if ($bus->armed == true) {
	echo "Speed 3<br>";
}
