<?php
include_once "Exchangmoney.php";
    class Exchange extends Exchangmoney{
        public $exchange;
        public function setExchange($money,$exchange){
            $this->money = $money;
            $this->exchange = $exchange;
        }
        public function getExchange(){
            return "Exchange Rate for Jan-03-2019 <br>".$this->money."$ = ".($this->money)*($this->exchange)."R <br> Your money exchange is ".($this->exchange)*(3000*$this->money)."R and exchange to <br> dollar is ".(($this->exchange)*(3000*$this->money))/(($this->money)*($this->exchange))."$";
        }
    }
    $Ex = new Exchange();
    $Ex ->setExchange(1,4000);
    echo $Ex->getExchange();
    
?>