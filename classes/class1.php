<?php
 /**
 * PHP Classes
 */

 // Class -> Tesla Y
 // Object -> My Tesla Y or your Tesla Y

 class Person {
    /*****************
     * properties
     *****************/
    //  public string $name;
    //  public int $age;

    public function __construct(public string $name, public int $age) {
    // $this->name = $name;
    // $this->age = $age;
    }

    /***************
     * methods
     ***************/
    public function introduce(): string {
        return "Hi, I'm $this->name and I am $this->age years old." . "<br>";
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

  }