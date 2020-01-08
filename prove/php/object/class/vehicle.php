<?php
abstract class Vehicle{
    protected $speed = 0;
    protected $time = 0;
    public function accelerate(int $amount, float $time) {
        $this->speed += $amount * $time;
    }
    public function decelerate(int $amount, float $time){
        $this->speed -= $amount * $time;
    }
    public function stop(){
        $this->speed = 0;
    }
}     
?>