<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay {
    
    private int $nbLane = 1;
    private int $maxSpeed = 10;
    
    public function addVehicle(Vehicle $vehicle) {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            setCurrentVehicles($vehicle);
        } else {
            print 'This vehicle is not allowed on this road.';
        }
    }
}