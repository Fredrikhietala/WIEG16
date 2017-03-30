<?php

//övning 1-2-3

class Planet {
	protected $name;
	protected $orbitDays;

	public function __construct($name, $orbitDays) {
		$this->name = $name;
		$this->orbitDays = $orbitDays;
	}
	public function visit() {
		echo "Välkommen till $this->name! Ett varv runt solen tar $this->orbitDays. <br>";
	}
}


class Earth extends Planet {
	protected $population;

	public function __construct($population) {
		parent::__construct('Jorden', 365.25);
		$this->population = $population;
	}
	public function visit() {
		parent::visit();
		echo "Befolkning: $this->population miljarder.<br>";
	}
}

$mars = new Planet('Mars', 687);
$earth = new Earth(7.5);

$mars->visit();
$earth->visit();

//övning 4

abstract class Animal {
	protected $eyeCount;
	abstract public function printAnimal();
}

abstract class Fish extends Animal {
	protected $habitat;

	public function __construct() {
		$this->habitat = 'underwater';
	}
}

class Mammal extends Animal {
	protected $liveBabies;
	public function printAnimal() {
		echo "Här är ett däggdjur <br>";
	}
}

class Tuna extends Fish {
	public $isPredator = true;
	public $waterType = 'salt';

	public function printAnimal() {
		echo "Här är en tonfisk. Den finns $this->habitat <br>";
	}
}

class Bear extends Mammal {
	public $furColor;
}

$bear = new Bear();
$tuna = new Tuna();
$bear->printAnimal();
$tuna->printAnimal();

// övning 5-7

class Vehicle {
	public function goTo($destination) {
		echo "Färdas till $destination <br>";
	}
}

class Bicycle extends Vehicle {
	/*public function goTo($destination) {
		echo "Färdas till $destination.<br>";
	}*/
}

class Car extends Vehicle {
	/*public function goTo($destination) {
		echo "Färdas till $destination.<br>";
	}*/
}

class Boat extends Vehicle {
	/*public function goTo($destination) {
		echo "Färdas till $destination.<br>";
	}*/
}

class Motorboat extends Boat {
	/*public function goTo($destination) {
		echo "Färdas till $destination.<br>";
	}*/
}

class Sail extends Boat {
	/*public function goTo($destination) {
		echo "Färdas till $destination.<br>";
	}*/
}

$bicycle1 = new Bicycle();
$bicycle1->goTo('Paris');
$car1 = new Car();
$car1->goTo('Rom');
$boat1 = new Motorboat();
$boat1->goTo('London');
$boat2 = new Sail();
$boat2->goTo('Copenhagen');
