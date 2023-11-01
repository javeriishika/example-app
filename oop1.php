class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayCarInfo() {
        echo "Car Information:\n";
        echo "Make: {$this->make}\n";
        echo "Model: {$this->model}\n";
        echo "Year: {$this->year}\n";
    }
}

// Creating an instance of the Car class
$myCar = new Car("Toyota", "Camry", 2023);

// Display car information
$myCar->displayCarInfo();

