<?php
require_once("account.php");
class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license,$driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "
        License: $this->license 
        Driver: {$this->driver->name}
        Number of passengers: $this->passenger
        ";
    } 

    public function getPassenger() {
        return $this->passenger;
    }

    public function setPassenger($passenger) {
        if ($passenger == 4) {
            $this->passenger = $passenger;
        } else {
            echo "Necesitas asignar 4 pasajeros";
        }
    }
}
    
?>    