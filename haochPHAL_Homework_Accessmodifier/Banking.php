<?php
    class Banking{
        protected $borrowMoney;
        protected $interest;
        public function setBorrow($borrowMoney,$interest){
            $this->borrowMoney= $borrowMoney;
            $this->interest= $interest;
        }
        public function getBorrow(){
            return $this->borrowMoney;
        }
    }
    
?>
