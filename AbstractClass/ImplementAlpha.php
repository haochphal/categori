<?php
    include_once "IMethodHolder.php";
    class ImplementAlpha implements IMethodHolder{
        public function getInfo($info){
            echo "This is NEWS! ".$info."<br>";
        }
        public function sendInfo($info){
            return $info;
        }
        public function calculate($first,$second){
            $calculate=$first+$second;
            return $calculate;
        }
        public function useMehtods(){
            $this->getInfo("Today you win 1000000$");
            echo $this->sendInfo("Man UTD change new coach")."<br>";
            echo "You make $".$this->calculate(90,120)." in your part-time job <br>";
        }
    }
    $worker=new ImplementAlpha();
    $worker->useMehtods();
?>