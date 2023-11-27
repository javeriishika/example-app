<?php

// EmployeeInterface defines the calculateSalary() method.
interface EmployeeInterface {
    public function calculateSalary();
}

// Base class Employee implements EmployeeInterface.
class Employee implements EmployeeInterface {
    protected $baseSalary;

    public function __construct($baseSalary) {
        $this->baseSalary = $baseSalary;
    }

    public function calculateSalary() {
        return $this->baseSalary;
    }
}

// Derived class Manager extends Employee and includes a bonus.
class Manager extends Employee {
    private $bonus;

    public function __construct($baseSalary, $bonus) {
        parent::__construct($baseSalary);
        $this->bonus = $bonus;
    }

    public function calculateSalary() {
        // Calculate the salary with the bonus
        return $this->baseSalary + $this->bonus;
    }
}

// Create instances of Employee and Manager
$employee = new Employee(50000);
$manager = new Manager(80000, 20000);

// Calculate and display salaries
echo "Employee Salary: $" . $employee->calculateSalary() . "\n";
echo "Manager Salary: $" . $manager->calculateSalary() . "\n";

