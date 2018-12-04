<?php

class Person { 
	private $firstname;
	private $lastname;
	
	public function setFirstname($pfirstname) {
		$this->firstname = $pfirstname;
	}	
	
		public function getFirstname(){ //pas de paramètres à entrer pour un get.
			return $this->firstname;
		}
	
	public function setLastname($plastname) {
		$this->lastname = $plastname;
	}
	
		public function getLastname(){
			return $this->lastname;
		}
	
	public function speak() {
		return "Hello my name is ". $this->firstname . " " . $this->lastname;
	}
	
}

$person1 = new Person();
// truc pour les nuls : $person1->firstname = "John";
// truc pour les nuls : $person1->lastname = "Doe";

$person1->SetFirstname("John");
$person1->SetLastname("Doe");

var_dump($person1->speak());

var_dump($person1->getFirstname());
var_dump($person1->getLastname());

2e personne :
	$person2 = new Person();
	// truc pour les nuls : $person2->firstname = "Jane";
	// truc pour les nuls : $person2->lastname = "Die";
	
	$person2->SetFirstname("Jane");
	$person2->SetLastname("Die");
	
	var_dump($person2->speak());
	
	var_dump($person2->getFirstname());
	var_dump($person2->getLastname());