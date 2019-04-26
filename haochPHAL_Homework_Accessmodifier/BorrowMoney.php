<?php
    include_once "Banking.php";
    class BorrowMoney extends Banking{
      public function setBorrow($borrowMoney,$interest){
          $this->borrowMoney = $borrowMoney;
          $this->interest = $interest;
       }
      public function getBorrow(){
        return "Mr. Vivord Rith must pay interest ".$this->borrowMoney."$ for <br>duration 365 days with capital ".(($this->borrowMoney)*$this->interest)."$";
       }
    }
    $borrowmoney = new BorrowMoney();
    $borrowmoney->setBorrow(1000,10);
    echo $borrowmoney->getBorrow();

?>