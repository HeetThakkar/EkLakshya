<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$branch=$_GET["branch"];
switch($branch){
    case "java":
        include "java.php";
        break;
    case "python":
        include "python.php";
         break;
    case "html":
        include "html.php";
        break;
    case "css":
        include "css.php";
        break;
}

    ?>
</body>
</html>