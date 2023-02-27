<?php
// create a new Person object
$person = new Person();

// set the name and email properties
$person->setName("John Smith");
$person->setEmail("john.smith@example.com");

// display the name and email properties
echo "Name: " . $person->getName() ."\n";
echo "Email: " . $person->getEmail();

class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}