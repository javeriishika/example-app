<?php

interface Vehicle {
    public function start();
}

class Car implements Vehicle {
    public function start() {
        echo "Car is started using a key.\n";
    }
}

class Motorcycle implements Vehicle {
    public function start() {
        echo "Motorcycle is started by kicking the starter.\n";
    }
}

// Create instances of Car and Motorcycle
$car = new Car();
$motorcycle = new Motorcycle();

// Start the vehicle
$car->start();
$motorcycle->start();

