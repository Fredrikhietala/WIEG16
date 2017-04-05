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

//övning 5.4, 6.3-4

interface iNoiseMaker {
	public function makeNoise();
}

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

class Bear extends Mammal implements iNoiseMaker {
	public function makeNoise() {
		echo "Björnen låter grooawl <br>";
	}
	public $furColor;
}

class Dog extends Mammal implements iNoiseMaker {
	public function makeNoise() {
		echo "Hunden låter voff <br>";
	}
}
class Robot implements iNoiseMaker {
	public function makeNoise() {
		echo "Roboten låter gnarl <br>";
	}
}

$bear = new Bear();
$tuna = new Tuna();
$dog = new Dog();
$robot = new Robot();
$bear->printAnimal();
$bear->makeNoise();
$tuna->printAnimal();
$dog->makeNoise();
$robot->makeNoise();

// övning 5.5-7

abstract class Vehicle {
	public function __construct($destination) {
		echo "Färdas till $destination <br>";
	}
	/*public function goTo($destination) {
		echo "Färdas till $destination <br>";
	}*/
}

class Bicycle extends Vehicle {
	public function __construct($destination) {
		parent::__construct($destination);
		echo "Färdas med cykel till $destination <br>";
	}
	/*public function goTo($destination) {
		echo "Färdas med cykel till $destination.<br>";
		parent::goTo($destination);
	}*/
}

class Car extends Vehicle {
	public function __construct($destination) {
		parent::__construct($destination);
		echo "Färdas med bil till $destination <br>";
	}
	/*public function goTo($destination) {
		echo "Färdas med bil till $destination.<br>";
		parent::goTo($destination);
	}*/
}

class Boat extends Vehicle {
	public function __construct($destination) {
		parent::__construct($destination);
		echo "Färdas med båt till $destination <br>";
	}
	/*public function goTo($destination) {
		echo "Färdas med båt till $destination.<br>";
		parent::goTo($destination);
	}*/
}

class Motorboat extends Boat {
	public function __construct($destination) {
		parent::__construct($destination);
		echo "Färdas med motorbåt till $destination.<br>";
	}
	/*public function goTo($destination) {
		echo "Färdas med motorbåt till $destination.<br>";
		parent::goTo($destination);
	}*/
}

class Sail extends Boat {
	public function __construct($destination) {
		parent::__construct($destination);
		echo "Färdas med segelbåt till $destination.<br>";
	}
	/*public function goTo($destination) {
		echo "Färdas med segelbåt till $destination.<br>";
		parent::goTo($destination);
	}*/
}

$bicycle1 = new Bicycle('Paris');
//$bicycle1->goTo('Paris');
$car1 = new Car('Rom');
//$car1->goTo('Rom');
$boat = new Boat('Rio');
$boat1 = new Motorboat('London');
//$boat1->goTo('London');
$boat2 = new Sail('Copenhagen');
//$boat2->goTo('Copenhagen');
