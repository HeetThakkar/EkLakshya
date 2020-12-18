<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="factorial.php" method="get">
      enter a number<input type="number" name="num1">
        <input type="submit" value="get factorial">
    </form>
    <?php

$num=$_GET["num1"];
if (!$num==''){
$fact=1;
for ($i=1; $i <= $num; $i++) { 
   $fact=$fact*$i;
}
echo "factorial of $num is $fact";
}
    ?>
</body>
</html>