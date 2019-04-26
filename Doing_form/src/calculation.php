<?php
include_once "index.php";
class calculation{
public $number=0;
public $calculate=1;
public function __construct($calculate){
    $this->calculate=$calculate;
 }
 public function getCalculate(){
     if(isset($_POST['btn'])){
        for($i;$i<=$_POST['btn'];$i++){
            
        }
     }
 }
}
?>