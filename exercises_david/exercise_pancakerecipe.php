<?php

//Övning 1.12-15

	class PancakeRecipe {
		public $flour;
		public $milk;
		public $egg;
		public $salt;
		public $butter;

		public function canMakeSinglePancake() {
			if ($this->flour >= 2.5/8 && $this->milk >= 6/8 && $this->egg >= 3/8 && $this->salt >= 0.5/8 && $this->butter >= 2/8) {
				return true;
			}
			else {
				return false;
			}
		}

		public function makeSinglePancake() {
			if ($this->canMakeSinglePancake()) {
				echo "En pannkaka klar, mums <br>";
			}		
			else {
				echo "Inte tillräckligt med ingredienser <br>";
			}
		}
		public function makePancakes() {

			do {
				echo $this->makeSinglePancake();
					$this->flour = $this->flour - 2.5/8;
					$this->milk = $this->milk - 6/8;
					$this->egg = $this->egg - 3/8;
					$this->salt = $this->salt - 0.5/8;
					$this->butter = $this->butter - 2/8;
			} while ($this->canMakeSinglePancake());
		}
	}

	$pancake1 = new PancakeRecipe();
	$pancake1->flour 	= 2.5;
	$pancake1->milk 	= 6;
	$pancake1->egg 		= 3;
	$pancake1->salt 	= 0.5;
	$pancake1->butter 	= 2;

	$pancake1->makePancakes();
