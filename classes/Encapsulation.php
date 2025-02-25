<?php
 /**
 * Bank Account Class
 */

 class BankAccount {
    /******************************************************
     * properties
     ******************************************************/
     private float $balance = 0;

    /******************************************************
     * methods
     ******************************************************/

     // Getter
     public function getBalance(): float {
        return $this->balance;
     }

     public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
     }

     public function wihthdraw($amount): float {
        if ($amount > 0  && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
     }
 
 }
 $account = new BankAccount();

 echo $account->deposit(1000) . "<br>";
 echo $account->wihthdraw(500) . "<br>";
 echo $account->getBalance();