<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 body{
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(images/atm.jpg);
background-repeat: no-repeat;
background-size: cover;
 }
        #border{

margin-left:25% ;
margin-right: 30%;
height: 550px;
margin-top: 180px;
border:2px solid gray;
background-color: lightgray;

        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<div >
<div id="border"> 
    <div style="margin-left: 0px;">
    <h2 align="center">Welcome to SBI bank ATM</h2>

<h4 style="margin-left: 300px;"> Enter Your Details</h4>


<?php

$card=array("heet"=>123456789,"hmt"=>"234567890","ram"=>"345678901");
$pinnn=array(123456789=>1234,234567890=>4567,345678901=>7890);
$_SESSION["balance"] =array(123456789=>1234,234567890=>4567,345678901=>7890);
$p=1; 
$amount=$_POST['amt'];
$_SESSION["amount"] =$amount;
$typeee="selection of type of transaction is mandatory";     
        $nameerr= $pinn= $cardnoo="";
     
        $type=$_POST['type1'];
        $type1=$_POST['type'];
        $_SESSION["type"]=$type1;
        $_SESSION["type1"]=$type;
     if($_SERVER["REQUEST_METHOD"]=="POST" ){
     
        $name =$_POST["name"];
        $cardno=$_POST["cardno"];
        $pin=$_POST["pin"];
        $cardno=(int)$cardno;
        $_SESSION["name"] =$name;
        $_SESSION["cardno"] = $cardno;
        $type1=$_POST['type'];
      
        
         if(empty($name)){
           $nameerr="Name is required";
         }
        
          if(empty($cardno)){
            $cardnoo="card number is required";
          }
          if(!empty($cardno)){
            $cardnooo="card number does not match username";
          }
          if(empty($pin)){
            $pinn="pin is required";
          }
          if(!empty($pin)){
            $pinno="pin is incorrect";
          }
          if($type1=='select'){
            $sc="selection is mandatory";
          }
          if($type=='select'){
            $sc1="selection is mandatory";
          }
          if((int)$card[$name]==$cardno){
            $cardnooo="";
            if((int)$pinnn[$cardno]==$pin){
               $pinno="";
              if($type1=='select' && $type=='select' ){
               $p=1;
               
              }
              else{
                $p=0;
              }


                            }
        }

        
         
    }     
       
         
    
    ?>
    <?php
   if($p==1){

    ?>
    <form name="myform" id="myform" action="<?php ($_SERVER["PHP_SELF"]); ?> " method="post" style="margin-left: 50px;">
    Name: <input type="text" name="name" style="margin-left: 75px;" value=<?php echo $username; ?>  >
    <span>*<?php echo $nameerr ?></span> <br><br>
    Card no:<input type="number" name="cardno" style="margin-left: 66px;" >
    <span>*<?php echo  $cardnoo . $cardnooo ?></span> <br><br>
    Pin: <input type="password" name="pin" style="margin-left: 97px;" >
    <span>*<?php echo  $pinn .$pinno?></span> <br><br>
    Type Of Acc: <select name="type" style="margin-left: 35px;" >
    <option value="select" selected>--select--</option>

    <option value="saving">Savings</option>
    <option value="current">current</option>
    </select><span>*<?php echo $sc ?></span> <br><br>
    Type Transaction: <select name="type1" >
    <option value="select" selected>--select--</option>
    <option value="withdraw">withdraw</option>
    <option value="deposit">deposit</option>
    <option value="check">check balance</option>
    </select><span>*<?php echo $sc1 ?></span> <br><br>
    
      Amount: <input type="number" name="amt" style="margin-left: 66px;"><span>*<?php echo "enter only if deposit or withdraw" ?></span><br><br>
   
    <input type="submit" value="submit" style="margin-left: 68px;">   <input type="reset" value="reset" style="margin-left: 18px;">

    <?php }
    
else{
if ($type1=='saving'){
  if($type=='withdraw'){
    include 'typeofacc.php';
  }
  if($type=='deposit'){
    include 'typeofacc1.php';
}
if($type=='check'){
  include 'typeofacc2.php';
}
}
else{
  if($type=='withdraw'){
    include 'typeofacc3.php';
  }
  if($type=='deposit'){
    include 'typeofacc4.php';
}
if($type=='check'){
  include 'typeofacc2.php';
}
}
}
?><br><br>
</form>

</div> 
<div style="margin-left:10px ; margin-top:50px; " >
 
        * Type in your PIN. This is typically 4 digits but can be longer. ..<br>
        * after successfull login.Choose a type of transaction. ...<br>
        *  Enter the transaction amount. ...<br>
        * Ask for print reciept only if needed. ...<br>
 
</div>

</div>

</div>
</body>
</html>