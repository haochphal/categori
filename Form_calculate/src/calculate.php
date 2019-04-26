<?php
class calculate{
    public $value;
    public function __construct($value){
        $this->value=$value;
    }
    public function getinput(){
        return $this->value;
    }
    public function calculation(){
        $resultFactorial=1;
        for($i=1;$i<=$this->getinput();$i++){
            $resultFactorial*=$i;
        }
        return $resultFactorial;
    }
}

?>