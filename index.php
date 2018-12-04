<?php

class Person { 
	private $firstname;
	private $lastname;
	
	public function setFirstname($pfirstname) {
		$this->firstname = $pfirstname;
	}
	
		public function setLastname($plastname) {
		$this->lastname = $plastname;
	}
}

$person1 = new Person();
// $person1->firstname = "John";
// $person1->lastname = "Doe";
$person1->SetFirstname("John");
$person1->SetLastname("Doe");
var_dump($person1);

$person2 = new Person();
// $person2->firstname = "Jane";
// $person2->lastname = "Die";
var_dump($person2);