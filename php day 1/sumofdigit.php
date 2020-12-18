<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sumofdigit.php" method="get">
      enter a number<input type="number" name="num1">
        <input type="submit" value="check">
    </form>
    <?php

$num=$_GET["num1"];
$len=strlen($num);

$sum=0;
for ($i=0; $i < $len; $i++) { 
$sum +=$num[$i];

} 
echo " sum of digits in $num is $sum";

?>
</body>
</html>