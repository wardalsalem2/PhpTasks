<?php

class car {
    public $make;
    public $model;
    public $year;

    function set($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function get() {   
        return "$this->make $this->model $this->year";
    }
}

$car0 = new Car();
$car0->set("Mercedes", "C-Class", 1960);

echo "This car is : " . $car0->get() . "<br>";

?>
