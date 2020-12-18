<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="reversestr.php" method="get">
        name<input type="text" name="name">
        <input type="submit" value="reverse">
        </form>
    <?php
$name=$_GET["name"];
if(!$name==''){
$rev= strrev($name);
echo "reverse of $name is $rev";
}

    ?>
</body>
</html>