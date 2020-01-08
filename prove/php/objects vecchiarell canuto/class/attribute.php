<?php
class Attribute{
    private $code;
    private $value;
    public function __construct($code, $value){
        $this->code = $code;
        $this->value = $value;
    }
    public function getCode(){
        return $this->code;

    }
    public function getValue(){
        return $this->value;
    }
    public function render(){
        return $this->code . " " . $this->value;
    }

    }
?>