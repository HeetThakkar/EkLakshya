<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="array.php" method="get">
        username<input type="text" name="username">
        <input type="submit" value="add">
        </form>
    <?php
    $name=$_GET["username"];
    $names=array('Ram','heet','hmt','thakkar');
     
if(!$name==''){
    $flag=0;
    foreach($names as $value){
        if($name==$value){
           $flag=1;
        }
        
    }
    if($flag==1){
        echo "welcome $name";
    }
    else{
        echo "user does not exist";
    }
}  
    ?>
</body>
</html>