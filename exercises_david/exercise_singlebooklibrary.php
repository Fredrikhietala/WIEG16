<?php

//övning 1.10

	class SingleBookLibrary {
		public $book;
		public $isBorrowed;

		public function borrow() {
			if ($this->isBorrowed) {
				echo "Boken är redan utlånad. <br>";
			}
			else {
				echo "Boken var inte utlånad, det går bra att låna. <br>";
				$this->isBorrowed = true;
			}
		}
	}
	$library = new SingleBookLibrary();
	$library->isBorrowed = false;
	$library->book = new Book('Jurassic Park', 'Michael Crichton');
	$library->borrow();
	$library->borrow();
	$library->borrow();