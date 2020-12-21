<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('GMT');
    echo time()."<br>";
    echo date("y-m-d H:I",time())."<br>";
    $newdate =strtotime("1 day",time());
    echo date("y-m-d",$newdate)."<br>";
    $newdate =strtotime("1 month",time());
    echo date("y-m-d",$newdate)."<br>";
    $newdate =strtotime("1 year",strtotime("2011/10/20"));
    echo date("y-m-d",$newdate)."<br>";
    $time='2020-06-01 15:30:00';
    echo date('Y-m-d h:i',strtotime('1 hour 20 minutes',strtotime($time)));
    ?>
</body>
</html>