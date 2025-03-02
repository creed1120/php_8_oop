<?php
 /**
 * Math Utilities Class
 */

 class MathUtils {
    public static $pi = 3.14159;

    public static function square(float $num) {
        return $num * $num;
    }
 }

echo MathUtils::$pi . "<br>";
echo MathUtils::square(24) . "<br>";


/*****************************
 * Singleton Design Patterns
 *****************************/

/**
 * Connection class using the "Connection::$instance" method
 */
 class ConnectionExample {
    // private class not accessible outside of class
    private static $instanceExample = null;

    private function __construct() {}

    public static function singletonPattern() {

        if (null === ConnectionExample::$instanceExample) {
            ConnectionExample::$instanceExample = new ConnectionExample();
        }
        return ConnectionExample::$instanceExample;
    }
}
$connExample = ConnectionExample::singletonPattern();


/**
 * Connection class using the "static::$instance" method
 */
// Expensive Resources
class Connection {
    // private class not accessible outside of class
    private static $instance = null;

    private function __construct() {}

    public static function factory() {

        if (null === static::$instance) {
            static::$instance = new Connection();
        }
        return static::$instance;
    }

}
$conn = Connection::factory();