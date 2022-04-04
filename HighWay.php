<?php

abstract class HighWay {

    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function getCurrentVehicles() {
        return $currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles) {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function getNbLane() {
        return $nbLane;
    }

    public function setNbLane($nbLane) {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed() {
        return $maxSpeed;
    }

    public function setMaxSpeed($maxSpeed) {
        $this->$maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);

    

}