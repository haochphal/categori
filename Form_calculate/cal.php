<?php
    include "src/calculate.php";
    if(isset($_POST['btn'])){
        $inputValue=$_POST['factorial'];
        if($inputValue<0){
            echo "Cann't calculate";
        }else{
            $first=new calculate($inputValue);
            echo "Result of".$first->getinput()."! is: ".$first->calculation();
        }
    }
?>