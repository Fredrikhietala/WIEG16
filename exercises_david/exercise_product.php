<?php

//OOP
// övning 1.9,11, 2.4-5 klasser, egenskaper och metoder, konstruktorer
	class Product {
		public $name;
		public $description;
		public $price;
		public $imageURL;
		public $quantity;
		public static $webshopName = "WIEG16 Kiosk";

		public function __construct($name, $description, $price = 100 ,$imageURL = '', $quantity = 10) {
			$this->name 		= $name;
			$this->description 	= $description;
			$this->price 		= $price;
			$this->imageURL 	= $imageURL;
			$this->quantity 	= $quantity;
		}

		public function printProduct() {
			echo "Produkt namn: $this->name <br>" .
				"Beskrivning: $this->description <br>" .
				"Pris: $this->price <br>" .
				"Bild: $this->imageURL <br>" .
				"Antal: $this->quantity <br>" .
				"Säljs i: " . Product::$webshopName . "<br>";
		}
	}

	$product1 = new Product('lakrits', 'Yummy', 25, 'img/lakrits.png', 2500);
		echo "Vi har skapat en produkt <br>";
		$product1->printProduct();

	Product::$webshopName = "Annan Kiosk";

	$product2 = new Product('gummianka', 'bra på programmering');
		$product2->printProduct();