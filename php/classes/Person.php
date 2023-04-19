<?php

class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  private $grandmother_father;
  private $grandfather_father;
  private $grandmother_mother;
  private $grandfather_mother;



  function __construct($name, $lastname, $age, $mother=null, $father=null, $grandmother_father=null, $grandfather_father=null ,$grandmother_mother=null, $grandfather_mother=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
    $this->grandmother_father = $grandfather_father;
    $this->grandfather_father = $grandfather_father;
    $this->grandmother_mother = $grandmother_mother;
    $this->grandfather_mother = $grandfather_mother;
  }

  function sayHi ($name){
    return "Hello, $name , I'm " .$this->name; 
  }
  function setHp($hp){
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp(){
    return $this->hp;
  }
  function getName(){
    return $this->name;
  }
  function getLastname(){
    return $this->lastname;
  }
  function getMother(){
    return $this->mother;
  }
  function getFather(){
    return $this->father;
  }
  function getGrandmotherMother(){
    return $this->grandmother_mother;
  }
  function getGrandfatherMother(){
    return $this->grandfather_mother;
  }
  function getGrandmotherFather(){
    return $this->grandmother_father;
  }
  function getGrandfatherFather(){
    return $this->grandfather_father;
  }

  function getInfo(){
    $info = "<h2>A few words about my family</h2>".
            "<br>My name is: ".$this->getName()." My lastname is: ".$this->getLastname()."<br>".
            "My father is: ".$this->father->getName()." ".$this->father->getLastname()."<br>".
            "My mother is: ".$this->mother->getName()." ".$this->mother->getLastname()."<br>".
            "My grandmother on my mother's side is: ".$this->grandmother_mother->getName()." ".$this->grandmother_mother->getLastname()."<br>".
            "My grandfather on my mother's side is: ".$this->grandfather_mother->getName()." ".$this->grandfather_mother->getLastname()."<br>".
            "My grandmother on my father's side is: ".$this->grandmother_father->getName()." ".$this->grandmother_father->getLastname()."<br>".
            "My grandfather on my father's side is: ".$this->grandfather_father->getName()." ".$this->grandfather_father->getLastname();
    return $info;
  }
}

$maria = new Person("Maria", "Ivanova", 79, null, null,null, null, null, null);
$semen = new Person("Semen", "Ivanov", 82, null, null,null, null, null, null);

$lena = new Person("Lena", "Petrova", 75, null, null,null, null, null, null);
$petya = new Person("Petya", "Petrov", 77, null, null,null, null, null, null);

$ivan = new Person("Ivan","Ivanov", 45, null, $maria, $semen,null,null);
$irina = new Person("Irina", "Ivanova", 42,$lena, $petya, null, null);
$kuzya = new Person("Kuzya", "Ivanov", 12, $irina, $ivan, $maria, $semen, $lena, $petya);



echo $kuzya->getInfo();
