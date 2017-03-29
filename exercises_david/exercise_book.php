<?php 
	//övning 3.1-3 Access modifiers public/private

	class Book {
		private $title;
		private $author;

		public function __construct($title, $author) {
			$this->title = $title;
			$this->author = $author;
		}

		public function getTitle(){
			return "Titel: $this->title";
		}
		public function setTitle($x){
			$this->title = $x;
		}
		public function getAuthor(){
			return "Författare: $this->author";
		}
		public function setAuthor($y){
			$this->author = $y;
		}
	}

	$book1 = new Book('Robinson Crusoe', 'Daniel Defoe');
	$book1->setTitle('Madame Bovary');
	$book1->setAuthor('Gustave Flaubert');
		echo $book1->getTitle() . " <br> " . $book1->getAuthor() . "<br>";
