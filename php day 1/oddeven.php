<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="oddeven.php" method="get">
      enter a number<input type="number" name="num1">
        <input type="submit" value="check">
    </form>
    <?php

$num=$_GET["num1"];
if($num>0 && $num<101){
if($num %2==0){
    echo "$num is even";
}
else{
    echo "$num is odd";
}
}
else{
    echo "enter a number between 0-100";
}
    ?>
</body>
</html>