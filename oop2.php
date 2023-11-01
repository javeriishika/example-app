<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Person $this->name is born!\n";
    }

    public function __destruct() {
        echo "Person $this->name is no more...\n";
    }
}

// Instantiate a Person object
$person = new Person("John");

// Some code or operations here...

// The destructor will be called when the object goes out of scope or is explicitly unset.
unset($person);

