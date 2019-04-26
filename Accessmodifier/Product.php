<?php
    class Product{
        public $product_name;
        public function setName($product_name){
            $this->product_name=$product_name;
        }

        public function getName(){
            return $this->product_name;
        }
    }
    $product_name = new Product();
    $product_name->setName("Labtop");
    echo $product_name->getName();

    echo "<br>".$product_name="Desk Top";
?>