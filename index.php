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
	
}

$person1 = new Person();
// $person1->firstname = "John";
// $person1->lastname = "Doe";
$person1->SetFirstname("John");
$person1->SetLastname("Doe");
var_dump($person1->getFirstname());
var_dump($person1->getLastname());

$person2 = new Person();
// $person2->firstname = "Jane";
// $person2->lastname = "Die";
$person2->SetFirstname("Jane");
$person2->SetLastname("Die");
var_dump($person2->getFirstname());
var_dump($person2->getLastname());