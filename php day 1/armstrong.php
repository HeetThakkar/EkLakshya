<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="armstrong.php" method="get">
      enter a number<input type="number" name="num1">
        <input type="submit" value="check">
    </form>
    <?php

$num=$_GET["num1"];
$len= strlen($num);

$arm=0;
$temp=0;
for ($i=0; $i < $len; $i++) { 
$temp=$num[$i]**$len;
$arm+=$temp;
  
}
if($num==$arm){
    echo "$num is an armstrong";
}
else{
    echo "$num is not an armstrong";
}

?>
</body>
</html>