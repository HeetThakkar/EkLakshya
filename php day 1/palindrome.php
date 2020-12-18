<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="palindrome.php" method="get">
        name<input type="text" name="name">
        <input type="submit" value="add">
        </form>
    <?php
$name=$_GET["name"];
if(!$name==''){
$pali= strrev($name);
if($pali==$name){
    echo "$name is a palindrome";
}
else{
    echo "$name is not a palindrome";
}

}


    ?>
    
</body>
</html>