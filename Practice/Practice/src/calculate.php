<?php 
class Calculate {
    public $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getInput() {
        return $this->value;
    }

    public function calculation() {
        $resultFactorial = 1;
        for($i=1; $i<=$this->getInput(); $i++) {
            $resultFactorial *= $i;
        }
        return $resultFactorial;
    }
}