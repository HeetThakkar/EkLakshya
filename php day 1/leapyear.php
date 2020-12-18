<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="leapyear.php" method="get">
      select<input type="date" name="year">
        <input type="submit" value="get factorial">
    </form> 
    <?php
    $year= $_GET["year"];
    $year=explode("-",$year);
    $check=$year[0];
   
    if ($check % 4==0){
        if($check % 100==0){
            if($check % 400==0){
                echo "$check is a leap year";
    }
    else{
        echo "$check is not a leap year";
    }
}
    else {
        echo "$check is a leap year";
    }
}
    else {
        echo "$check is not a leap year";
    }

    ?>
</body>
</html>