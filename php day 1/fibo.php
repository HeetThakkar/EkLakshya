<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="fibo.php" method="get">
      first no<input type="number" name="num1">
      second no<input type="number" name="num2">
      number of itterations<input type="number" name="num3">
        <input type="submit" value="check">
    </form>
    <?php   
    $num= $_GET["num3"];
    $n1= $_GET["num1"];
    $n2= $_GET["num2"];
    $i=1;
    if(!$n1==0){
        echo "$n1,";
        echo "$n2,";
    while($i<$num){
        $n3=$n1+$n2;
        echo "$n3,";
        $n1=$n2;
        $n2=$n3;
        $i+=1;
    }
}
    ?>

</body>
</html>