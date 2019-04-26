<?php
    class Calculate{
        public $Square;
        public $Rectangular;
        public $Circle;

        public function Square($corner){
            $this->corner=$corner;
            $square=($corner*$corner);
            echo $square."<br>";
        }
        public function Rectangular($width,$height){
            $this->width=$width;
            $this->height=$height;
            $rectangular=($width*$height);
            echo $rectangular."<br>";
        }
        public function Circle($R){
            $totalCircle=(($R*$R)*3.14);
            echo $totalCircle."<br>";
        }
    }
    $square = new Calculate();
    $square->Square(12);
    $rectangular = new Calculate();
    $rectangular->Rectangular(23,23);
    $circle = new Calculate();
    $circle->Circle(12);
?>