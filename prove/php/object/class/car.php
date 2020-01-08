<?php
class Car extends VehicleWithWheels{
    
    private $doors;
    public function __construct(int $doors){
        $this->doors = $doors;
        $this->wheels= 4;
    }
}
?>