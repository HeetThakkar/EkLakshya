<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="vowel.php" method="get">
        name<input type="text" name="name">
        <input type="submit" value="reverse">
        </form>
    <?php
$name=$_GET["name"];

$len=strlen($name);
$count=0;
for ($i=0; $i <$len ; $i++) { 
    if( $name[$i]=='a' || $name[$i]=='e' ||$name[$i]=='i' ||$name[$i]=='o' || $name[$i]=='u'){
 $count+=1;
    }
    
}
echo "number of vowel in $name are $count";
    ?>
</body>
</html>