<?php


class myClass{
	public $name= "Jimbo";

	function sayHello(){
		echo "<h1>Hello! My name is :" .$this->name ."</h1>";
	}
}
	$object1= New myClass();
	$object1-> sayHello();
