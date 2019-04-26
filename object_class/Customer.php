<?php 
    class Customer{
        private $first_name;
        private $last_name;
        private $age;

        public function __construct($first_name,$last_name,$age){
           $this->setData($first_name,$last_name,$age);
        }

        public function setData($first_name,$last_name,$age){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->age = $age;
        }
        public function getData(){
           echo "Name :".$this->first_name." ".$this->last_name."<br>";
           echo "Age : ".$this->age."<br>";
        }

    }
    $c1 = new Customer("Haoch","PHAL",0);
    $c1->getData();
?>