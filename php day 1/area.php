<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $num1=$_GET["len"];
   $num2=$_GET["wid"];
   $operation=$_GET["operation"];
   $area=0;
   if ($num1=='' && $num2=='' && $num3==''){
       ?>
   
<form action="area.php" method="get"><br>
        length,radius,height<input type="number" name="len"><br>
       width,base<input type="number" name="wid"><br>
       operation:<br>
       <input type="radio" name="operation" value="triangle">triangle<br>
       <input type="radio" name="operation" value="square">square<br>
       <input type="radio" name="operation" value="rectangle">rectangle<br>
       <input type="radio" name="operation" value="circle">circle<br>
       
        <input type="submit" value="calculate area">
        </form>
   
  
   <?php } 
   if(!$num1==0){
   if($operation=='triangle'){
$area=0.5*$num1*$num2;
echo "area of triangle with height $num1 and base $num2 is $area";
   }
   else   if($operation=='rectangle'){
    $area=$num1*$num2;
    echo "area of rectangle with length $num1 and width $num2 is $area";
       }
       else   if($operation=='square'){
        $area=$num1*$num2;
        echo "area of rectangle with length $num1 and width $num2 is $area";
           }
        else{
            $area=($num1**2)*(22/7);
            echo "area of circle with radius $num1 is $area";
        }
    }
    ?>
</body>
</html>