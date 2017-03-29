<?php
// OOP
//övning 1.6-8, 2.2-3,6, 3.5-6

	class Car {
		private $model;
		private $color;
		private $price;

		public function __construct($model = "Volvo", $color = "röd", $price = "25000", $sellDate = "2017-03-27") {
			$this->model = $model;
			$this->color = $color;
			$this->price = $price;
			$this->sellDate = $sellDate;
		}

		public function printInfo() {
			echo "Det här är en $this->color $this->model som kostar $this->price kr som såldes $this->sellDate <br>";
		}
		public function halfPrice() {
			$this->price = $this->price/2;
		}
		public function changeCar($model, $color, $price) {
			$this->model = $model;
			$this->color = $color;
			$this->price = $price;
		}
	}


	$myCar = new Car('Wolkswagen', 'beige');
		$myCar->halfPrice();
		$myCar->changeCar('Ferrari', 'röd', '500000');
		$myCar->printInfo();
	