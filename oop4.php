<?php

class Shape {
    public function getArea() {
        // The base class implementation returns 0.
        return 0;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        // Calculate the area of a circle
        return M_PI * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        // Calculate the area of a rectangle
        return $this->width * $this->height;
    }
}

// Create instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Calculate and display the areas
echo "Circle Area: " . $circle->getArea() . " square units\n";
echo "Rectangle Area: " . $rectangle->getArea() . " square units\n";

