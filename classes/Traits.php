<?php
 /***************************
 * Class with Traits
 ****************************/

interface Logger {
    public function log(string $message): void;
    public function display(string $displayed): void;
}

// A way of adding methods to Classes without Inheritance.
trait Loggable {

    // "log" method
    public function log(string $message): void 
    {
        echo "Logging: $message" . "<br>";
    }

    public function display(string $displayed): void
    {
        echo "Displyaing: $displayed" . "<br>";
    }
}

// this class requires some methods & the "trait" is to provide them from the interface OR can be used without "implements"
 class User implements Logger {

    // Defines the "trait"
    use Loggable;

    // constructor property promotion
    public function __construct(public string $name)
    {}

    // saves itself
    public function save(): void 
    {
        // log that something has happened
        $this->log("User $this->name saved!");
    }

    public function show_display(): void
    {
        $this->display("$this->name is being displayed.");
    }
 }

 $user = new User("Ceddy");
 $user->save();
 $user->show_display();