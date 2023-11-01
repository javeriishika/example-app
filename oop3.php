<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount to account $this->accountNumber. New balance: $this->balance\n";
        } else {
            echo "Invalid deposit amount. Amount must be greater than 0.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance\n";
        } elseif ($amount > 0) {
            echo "Insufficient balance. Withdrawal amount exceeds the account balance.\n";
        } else {
            echo "Invalid withdrawal amount. Amount must be greater than 0.\n";
        }
    }
}

// Create a BankAccount instance
$account = new BankAccount("123456789", 1000);

// Access account properties
echo "Account Number: " . $account->getAccountNumber() . "\n";
echo "Account Balance: $" . $account->getBalance() . "\n";

// Perform deposit and withdrawal operations
$account->deposit(500);
$account->withdraw(200);
$account->withdraw(1500);
$account->deposit(-100); // Invalid deposit

// Check the final account balance
echo "Final Account Balance: $" . $account->getBalance() . "\n";

