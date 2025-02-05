<?php
class car {
    private $make;
    private $model;
    private $year;
    public function setter($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function getter() {   
        return "$this->make $this->model $this->year";
    }
}
$car0 = new Car();
$car0->setter("Mercedes", "C-Class", 1960);
echo "This car is : " . $car0->getter() . "<br>";
?>
