<?php
 /***************************
 * Class with Interfaces
 ****************************/

interface PaymentProcessor {
    // (float) for variable & (bool) on success
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool;
}

/**
 * Abstract class
 */
// Class that implements the interface class and contains at least 1 abstract (not implemented) method
abstract class OlinePaymentProcessor implements PaymentProcessor {

    // some common functionality that the "Concrete Classes" share
    // assuming both Payment processors accept some kind of API key
    public function __construct(
        protected string $apikey
        ) {}

    // this "abstract" funcion has to be implemented by a class that implements the current class it is defined in.
    abstract protected function validateApiKey(): bool;

    public function processPayment(float $amount): bool {
        if ( ! $this->validateApiKey() ) {
            throw new Exception("Invalid API Key");
        }
        return false;
    }

    public function refundPayment(float $amount): bool {
        if ( ! $this->validateApiKey() ) {
            throw new Exception("Invalid API Key");
        }
        return false;
    }
}

/**
 * Concrete class
 */
// Implements all the Interface methods & also implements all Abstract class methods.
class StripeProcessor extends OlinePaymentProcessor {
    // implemented from the abstract "validateApiKey()" function in the OlinePaymentProcessor class
    protected function validateApiKey(): bool {
        return false;
    }
}
class PayPalProcessor extends OlinePaymentProcessor {
    // implemented from the abstract "validateApiKey()" function in the OlinePaymentProcessor class
    protected function validateApiKey(): bool {
        return false;
    }
}

$processor = new StripeProcessor("the_api_key_string");