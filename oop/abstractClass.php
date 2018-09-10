<?php 
abstract class Dog{
	public $name  = 'Bi';
	public $color = 'red';
	protected $age = '2';

	abstract public function run();

	abstract public function say();
}

class YellowDog extends Dog{

	public function run(){
		echo "run in YellowDog";
	}
	public function say(){
		echo "say in YellowDog";
		echo "<br>";
		echo $this->age;
	}
	public function say2(){
		echo "say2 in YellowDog";
	}
}

$dog = new YellowDog;
$dog->say();
echo '<br>';
echo $dog->name;
echo '<br>';
echo $dog->color;
echo '<br>';
//echo $dog->age; // ko goi dc, chi dc su dung ben trong class extends
