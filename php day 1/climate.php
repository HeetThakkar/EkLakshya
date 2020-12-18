<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="climate.php" method="get">
        <select name="climate" >
            <option value="summer">summer</option>
            <option value="winter">winter</option>
            <option value="rainy">rainy</option>
            <option value="windy">windy</option>
        </select>
        <input type="submit" value="get suggestion">
    </form>
    <?php 
    $climate= $_GET["climate"];
    switch($climate){
        case 'rainy':
           echo 'Drink Tea and samosa. Enjoy rain';
            break;
            case 'summer':
            echo 'eat icecream. Go for swimming';
            break;
            case 'winter':
           echo 'Drink hot soup and sleep';
            break;
            case 'windy':
            echo 'Enjoy Cycling and kite flying';
            break;
            
        }
    
    
    ?>
</body>
</html>