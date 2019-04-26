<?php
    class Exchangmoney{
      protected $money;
      public function setMoney($money){
          $this->money = $money;
       }
      public function getMoney(){
        return $this->money;
       }
    }
?>