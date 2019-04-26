<?php 
require "src/calculate.php";

if(isset($_POST['btn-cal'])) {
    $inputValue = $_POST['factorial'];

    if($inputValue <0) {
        echo "Cannot calculate";
    }else {
        $first = new Calculate($inputValue);
        echo "Result of ". $first->getInput()."! is: " .$first->calculation();
    }
}