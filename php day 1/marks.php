<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="marks1.php" method="get">
marks1<input type="text" name="marks1">
marks2<input type="text" name="marks2">
marks3<input type="text" name="marks3">
<input type="submit">
</form>
 <?php

$marks1=$_GET["marks1"];
$marks2=$_GET["marks2"];
$marks3=$_GET["marks3"];
$avg=($marks1+$marks2+$marks3)/3;

if (!$marks1=='' ||!$marks2=='' ||!$marks3=='' ){
if($avg>=90){
    echo "grade: A+";
}
else if($avg>=80 && $avg<90){
    echo "grade: B";
}
else if($avg>=70 && $avg<80){
    echo "grade: c";
}
else{
    echo "grade: F better luck next time";
}
}
    ?>
</body>
</html>