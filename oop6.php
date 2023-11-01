<?php

abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks: Woof! Woof!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat meows: Meow! Meow!\n";
    }
}

// Create instances of Dog and Cat
$dog = new Dog();
$cat = new Cat();

// Make the animals make their sounds
$dog->makeSound();
$cat->makeSound();

