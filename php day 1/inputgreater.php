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
   $num3=$_GET["num3"];
   if ($num1=='' && $num2=='' && $num3==''){
       ?>
   
<form action="inputgreater.php" method="get">
        num1<input type="number" name="num1">
        num2:<input type="number" name="num2">
        num3: <input type="number" name="num3">
        <input type="submit" value="add">
        </form>
   
  
   <?php }
  
if($num1>$num2 && $num1>$num3){
    echo " num1 i.e $num1";
}
if($num2>$num1 && $num2>$num3){
    echo " num2 i.e $num2";
}
if($num3>$num1 && $num2<$num3){
    echo " num3 i.e $num3";
}

    ?>
</body>
</html>