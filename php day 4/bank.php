<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Account{
    public $balance;
function __construct($balance)
{
    $this->balance=$balance;
}
function withDraw($amount){
    $this->balance= $this->balance-$amount;
}
function deposit($amount){
    $this->balance= $this->balance+$amount;
}
function getBalance(){
    return  $this->balance;
}
}
class Savings extends Account{
    function withDraw($amount)
    {
        $this->balance= $this->balance-($amount+100);
        echo  "100 extra processing fees deducted from your account","<br>";
    }
    function deposit($amount){
        $this->balance= $this->balance+($amount-20);
        echo  "20 extra processing fees deducted from your account","<br>";
    }
}
class Current extends Account{
    function withDraw($amount)
    {
        $this->balance= $this->balance-($amount+80);
        echo "80 extra processing fees deducted from your account";
    }
    function deposit($amount){
        $this->balance= $this->balance+($amount-10);
        echo  "10 extra processing fees deducted from your account","<br>";
    }
}
$sav=new Savings(5000);
echo "current balance:";
echo $sav->getBalance(),"<br>";
echo "withdraw of rupees 500","<br>";
$sav->withDraw(500);
echo $sav->getBalance(),"<br>";
echo "deposit of rupees 500","<br>";
$sav->deposit(500);
echo $sav->getBalance(),"<br>";
$curr=new Current(8000);
echo "current balance:";
echo $curr->getBalance(),"<br>";
echo "withdraw of rupees 500","<br>";
$curr->withDraw(500);
echo $curr->getBalance(),"<br>";
echo "deposit of rupees 500","<br>";
$curr->deposit(500);
echo $curr->getBalance(),"<br>";
?>
</body>
</html>