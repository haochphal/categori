<?php 
        class Customer {
            private $name;
            public function setName($name){
                $this->name=$name;
            }
            public function getName(){
                return $this->name;
            }
        }

        $cus = new Customer();
        $cus->setName("Passerelles Numeriques Cambodia");
        //echo $cus->name;
        echo $cus->getName();
?>