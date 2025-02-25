<?php
 /**
 * PHP Classes
 */

 class Person {
    /******************************************************
     * properties
     ******************************************************/
     public string $name;
     public int $age;

    public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
    }

    /******************************************************
     * methods
     ******************************************************/
    public function introduce(): string {
        return "Hi, I'm $this->name and I am $this->age years old.";
    }
 
 }
    //  $person = new Person("Ceddy", 48);
    //  echo $person->introduce();
    //  $person2 = new Person("Alice", 30);
    //  echo $person2->introduce();


 /**
  * Class Inheritence
  */
  class Employee extends Person {

    public string $name;
    public int $age;
    public string $position;
    public string $duties;
    public string $jobs;


    public function __construct($name, $age, $position, $duties, $jobs) {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
        $this->duties = $duties;
        $this->jobs = $jobs;
        }

    public function introduce(): string {
        return parent::introduce() . " I work as a $this->position and my duties are $this->duties. My job is $this->jobs";
    }

  }
//   $obj = new Employee("Tyler", 45, "Manager", "Filing, Data Entry");
 // new Person("Peter", 55); <- Objects

  /**
   * Polymorphism
   */
  $people = [
    // Objects
    new Employee("Tyler", 45, "Manager", "Filing, Data Entry", "Software Engineer"),
    new Person("Peter", 55),
  ];

  function introduce(Person $person) {
    return $person->introduce();
  }

//   echo "<pre>";
//   var_dump($people);
//   echo "</pre>";


  foreach ($people as $person) {
    echo introduce($person) . "<br>";
  }