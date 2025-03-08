<?php
 /***************************
 * Class with Interfaces
 ****************************/

interface PaymentProcessor {
    // (float | int) for variable & (bool) on success
    public function processPayment(float | int $amount): bool;
    public function refundPayment(float | int $amount): bool;
}

// abstract class PaymentProcessor {
//     // (float | int) for variable & (bool) on success
//     abstract public function processPayment(float | int $amount): bool;
//     abstract public function refundPayment(float | int $amount): bool;
// }

/**
 * Abstract class
 */
// Class that implements the interface class and contains at least 1 abstract (not implemented) method
abstract class OnlinePaymentProcessor implements PaymentProcessor {

    // some common functionality that the "Concrete Classes" share
    // assuming both Payment processors accept some kind of API key
    public function __construct(
        protected string $apikey
        ) {}

    // this "abstract" funcion has to be implemented by a class that implements the current class it is defined in.
    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float | int $amount): bool;
    abstract protected function executeRefund(float | int $amount): bool;


    public function processPayment(float | int $amount): bool {
        if ( ! $this->validateApiKey() ) {
            throw new Exception("Invalid API Key");
        }
        return $this->executePayment($amount);
    }

    public function refundPayment(float | int $amount): bool {
        if ( ! $this->validateApiKey() ) {
            throw new Exception("Invalid API Key");
        }
        return $this->executeRefund($amount);
    }
}

/**
 * Concrete class
 */
// Implements all the Interface methods & also implements all Abstract class methods.
final class StripeProcessor extends OnlinePaymentProcessor {
    // implemented from the abstract "validateApiKey()" function in the OnlinePaymentProcessor class
    protected function executePayment(float | int $amount): bool {
        echo "Processing Stripe Payment of $amount\n" . "<br>";
        return true;
    }
    protected function executeRefund(float | int $amount): bool {
        echo "Processing Stripe Refund of $amount\n" . "<br>";
        return true;
    }

    protected function validateApiKey(): bool {

        // checks if "sk_" is the begiining of the string
        return strpos( $this->apikey, "sk_" ) === 0;
    }
}

// class StripeProcessorV2 extends StripeProcessor {}

class PayPalProcessor extends OnlinePaymentProcessor {
    // implemented from the abstract "validateApiKey()" function in the OnlinePaymentProcessor class
    protected function executePayment(float | int $amount): bool {
        echo "Processing PayPal Payment of $amount\n" . "<br>";
        return true;
    }
    protected function executeRefund(float | int $amount): bool {
        echo "Refunding PayPal Payment of $amount\n" . "<br>";
        return true;
    }

    protected function validateApiKey(): bool {
        return strlen( $this->apikey ) === 32;
    }
}

class CashPaymentProcessor implements PaymentProcessor {
    public function processPayment(float | int $amount): bool {
        echo "Cash Payment ... <br>";
        return true;
    }

    public function refundPayment(float | int $amount): bool {
        echo "Cash Refund ...<br>";
        return true;
    }

    public function executePayment(float | int $amount): bool {
        echo "Cash Payment ... <br>";
        return true;
    }

    public function executeRefund(float | int $amount): bool {
        echo "Cash Refund ...<br>";
        return true;
    }
}


// can work with any of the payment processors that we have Stripe, PayPal, or CashPayment
class OrderProcessor {

    public function __construct(private PaymentProcessor $paymentProcessor)
                                            // ^^^^ Composition ^^^^ //
    {
    }

    // union type "|" pipe operator (added string & array types to $items variable)
    public function processOrder(float | int $amount, string | array $items): void
    {
        // do something...

        if ( is_array($items) ) {
            $itemsList = implode(', ', $items);
        } else {
            $itemsList = $items;
        }

        echo "List of items: $itemsList" . "<br>";

        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n" . "<br>";
        } else {
            echo "Order processing failed\n" . "<br>";
        }
    }

    public function refundOrder(float | int $amount): void
    {
        // do something...
        
        if ($this->paymentProcessor->refundPayment($amount)) {
            echo "Refund processed successfully\n" . "<br>";
        } else {
            echo "Refund processing failed\n" . "<br>";
        }
    }

}

// $processor = new StripeProcessor("sk_hdwudncjdcwdcc");
// $printobj = $processor->processPayment(500);
// echo $printobj . "<br>"; // returns 1 or 0 (true or false)

// $cashpayment = new CashPaymentProcessor();
// $cashpayment->executePayment(1000);
// $cashpayment->executeRefund(1000);

$stripeProcessor = new StripeProcessor("sk_test_123456");
$paypalProcessor = new PayPalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

// $stripeOrder->processOrder(100.00);
// $paypalOrder->processOrder(150.00);
// $cashOrder->processOrder(50.00);

// adding the "string | array $items" parameters from "processOrder()" function
$stripeOrder->processOrder(100.00, "Book");
$paypalOrder->processOrder(150.00, ['Book', 'Tablet']);
$cashOrder->processOrder(50.00, ['Apple', 'Orange', 'Banana']);

$stripeOrder->refundOrder(25.00);
$paypalOrder->refundOrder(50.00);
$cashOrder->refundOrder(10.00);