<?php
include_once "Customer.php";
class Discount extends Customer{
    private $discount;
    public function setData($name,$discount){
        $this->name = $name;
        $this->discount = $discount;
    }
    public function getData(){
        return "The customer is: <b>".$this->name."</b> has discount <b>".$this->discount."%</b>";
    }
}
$dis = new Discount();
$dis->setData("Cambodia",50);
echo $dis->getData();
?>