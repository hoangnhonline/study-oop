<?php 
	class Person {
		public $facebookName;
		public function walk(){
			echo 'walk in Person class';
		}
	}
	class  Student extends Person{
		public $name;
		public $age;
		public $gender;

		function __construct($name, $facebookName){
			$this->name = $name;
			$this->facebookName = $facebookName;
		}
		public function read(){

		}
		public function say(){
			echo 'Hello, my name is '. $this->name;
			echo '<br>';
			echo 'My facebook name is '. $this->facebookName;
		}
		public function study(){
			echo 'Stend study english';
		}
		public function walk(){
			echo 'walk in Student class';
		}
		function __destruct(){
			echo '<br>';
			echo 'student is leave';
		}
	}

	$student = new Student('HoangNH', 'Ut Hoang');
	//$student->study();
	//$student->say();
	$student->walk();
	unset($student);