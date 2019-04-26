
<?php
    include_once "AEON.php";
    class Capital implements AEON{
        public $borrowed;
        public $interest;
        public function CalculateMoney($borrowed,$interest){
            $totalMoney = $borrowed+(($borrowed*$interest/100)*12);
            echo "Total Money: ".$totalMoney."<br>";

            $totalPayment = ($borrowed+(($borrowed*$interest/100)*12))/12;
            echo "Payment per month: ".$totalPayment."<br>";

            $totalInterest =(($borrowed*$interest/100)*12);
            echo "Total interest: ".$totalInterest."<br>";
        }
    }
    $capital = new Capital();
    $capital->CalculateMoney(870,1.9);
?>