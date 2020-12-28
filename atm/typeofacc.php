<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
</head>
<body>
<form method="post" action="<?php ($_SERVER["PHP_SELF"]); ?> " >
<?php
echo "<h2>welcome  $name to your ".   $_SESSION["type"] . " account to ". $_SESSION["type1"]." </h2>";
?>  

  <?php
    $operation=$_POST["type"];
    $operation1=$_POST["type1"];
    $balan= $_SESSION["balance"][ $_SESSION["cardno"]];
    $_SESSION["balance1"]=$balan;
  $balan=(int)$_SESSION["balance"][ $_SESSION["cardno"]];
    $amt=$_POST['amt'];
  
  
    $typeee="selection is mandatory";

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

$sav=new Savings((int)$balan);
echo "current balance:";
echo $sav->getBalance(),"<br>"; 


if((int)$balan<$_SESSION["amount"]){
echo "<h3>you dont have sufficient balance to withdraw</h3>" .$_SESSION["amount"];
}
else{
    echo "withdraw of rupees ". $_SESSION["amount"],"<br>";
$sav->withDraw($_SESSION["amount"]);
echo "current balance:". $sav->getBalance(),"<br>";
$_SESSION["balance"][ $_SESSION["cardno"]]=$sav->getBalance();
}
      
   ?>

  <?php 
  


  ?>
</form>
</body>
</html>