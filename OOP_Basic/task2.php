<?php 
    class Vehicle {
        protected $type;
        function move(){
            echo "hellow move";
        }
    }
    class car extends Vehicle {
        public function move() {
            echo "Car is moving";
        }
    }
    class Bike extends Vehicle {
        public function move() {
            echo "Bike is moving";
        }
    }
    $car = new Car();
    $car->move();   
    echo "<br>";
    $bike = new Bike(); 
    $bike->move();
?>
