<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay {
    
    private int $nbLane = 4;
    private int $maxSpeed = 130;


    public function addVehicle(Vehicle $vehicle) {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            print 'This vehicle is not allowed on this road.';
        } else {
            setCurrentVehicles($vehicle);
        }
    }
}