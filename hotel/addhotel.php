<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="success1.php ">
      hotelname  <input type="text" name="name"><br>
      category: <br> <input type="checkbox" name="category[]" value="southindian">southindian <br>
      <input type="checkbox" name="category[]" value="northindian">northindian <br>
      <input type="checkbox" name="category[]" value="chinese">chinese <br>
      <input type="checkbox" name="category[]" value="fastfood">fastfood <br><br>
      type: <br><input type="checkbox" name="type[]" value="veg">veg <br>
      <input type="checkbox" name="type[]" value="nonveg">nonveg <br><br>
      location <input type="text" name="location"> <br>
      city <input type="text" name="city"><br>
      description <input type="text" name="description"><br>
<input type="submit" value="submit">
    </form>

     
</body>
</html>