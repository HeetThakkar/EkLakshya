<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="swap.php" method="get">
        number<input type="text" name="num">
        <input type="submit" value="reverse">
        </form>
    <?php
$num=$_GET["num"];
if(!$num==''){
$rev= strrev($num);
echo "reverse of $num is $rev";
}

    ?>
</body>
</html>