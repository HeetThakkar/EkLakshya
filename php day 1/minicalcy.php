<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $num1=$_GET["num1"];
   $num2=$_GET["num2"];
   $operation=$_GET["operation"];
   $result=0;
   if ($num1=='' && $num2=='' && $num3==''){
       ?>
   
<form action="minicalcy.php" method="get"><br>
        num1<input type="number" name="num1"><br>
        num2:<input type="number" name="num2"><br>
       operation:<br>
       <input type="radio" name="operation" value="+">+<br>
       <input type="radio" name="operation" value="-">-<br>
       <input type="radio" name="operation" value="/">/<br>
       <input type="radio" name="operation" value="*">*<br>
       <input type="radio" name="operation" value="**">**<br>
        <input type="submit" value="add">
        </form>
   
  
   <?php } 
   
   if($operation=='+'){
       $result=$num1+$num2;
       echo "addition is $result";
       
   }
  else if($operation=='-'){
    $result=$num1-$num2;
    echo "subtraction is $result";
    
}
else if($operation=='*'){
    $result=$num1*$num2;
    echo "multiplication is $result";
    
}
else if($operation=='/'){
    $result=$num1/$num2;
    echo "division is $result";
    
}
else{
    $result=$num1**$num2;
    echo "$num1 power $num2 is $result";
}


   ?>
</body>
</html>