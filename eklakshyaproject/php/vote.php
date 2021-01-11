<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: cyan;">
    

<?php
session_start();
$aadhar=$_SESSION["aadhar1"];
$email=$_SESSION["email"];
$vote=$_POST["vote"];
$cn=mysqli_connect("localhost","root","","image") or die("Could not Connect My Sql");
$sql = "INSERT INTO `vote` (`email`,`aadhar`,`vote_party`)  VALUES ('$email','$aadhar','$vote')";
if (mysqli_query($cn, $sql)) {
	echo"<h1 style='text-align: center ;font-size: 40px;font-style: italic; opacity: 1.0;margin-top:300px;'>". "Your vote has been added successfully! "."</h1>";

}
else {
	echo"<h1 style='text-align: center ;font-size: 40px;font-style: italic; opacity: 1.0;margin-top:250px;'>". "You have already voted once! you are not allowed to vote again "."</h1>";
    
}


?>
</body>
</html>