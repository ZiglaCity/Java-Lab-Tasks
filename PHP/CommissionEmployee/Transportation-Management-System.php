<?php
abstract class Vehicle {
    protected $vehicleId;
    protected $model;
    protected $fuelLevel;

    public function __construct($vehicleId, $model, $fuelLevel) {
        $this->vehicleId = $vehicleId;
        $this->model = $model;
        $this->fuelLevel = $fuelLevel;
    }

    public function refuel($liters) {
        $this->fuelLevel += $liters;
        echo "$this->model refueled. New fuel level: $this->fuelLevel liters\n";
    }

    abstract public function calculateRange();
}

class Car extends Vehicle {
    private $fuelEfficiency;

    public function __construct($vehicleId, $model, $fuelLevel, $fuelEfficiency) {
        parent::__construct($vehicleId, $model, $fuelLevel);
        // since effeciency is measured in percentage, lets make sure we dont pass in a negative value
        if( $fuelEfficiency < 0.0){
            throw new InvalidArgumentException("fuel efficiency cannot be negative.");
        }
        $this->fuelEfficiency = $fuelEfficiency;
    }

    public function calculateRange() {
        $range = $this->fuelLevel * $this->fuelEfficiency;
        echo "$this->model range: $range km\n";
        return $range;
    }
}

class TransportationManager {
    public function operateVehicle(Vehicle $vehicle) {
        $vehicle->calculateRange();
    }

    // Compile-time polymorphism (method overloading through default arguments)
    public function refuelVehicle(Vehicle $vehicle, $liters, $fuelType = null) {
        if ($fuelType) {
            echo "Refueling {$vehicle->model} with $fuelType\n";
        }
        $vehicle->refuel($liters);
    }
}

// Implementation Tasks
// A. Create Vehicles:
// Car("C001", "Sedan", 50, 15)
// B. Refuel Sedan 
// C. Use operateVehicle() to process all

$solomonCar= new Car("C001", "Sedan", 50, 15);
$solomonCar->refuel(20);
$manager = new TransportationManager();
$manager->operateVehicle($solomonCar);

?>
