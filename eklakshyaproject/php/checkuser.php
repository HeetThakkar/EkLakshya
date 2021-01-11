<?php
session_start();
?>
<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","","image") or die("Could not Connect My Sql");

$user = $_POST["email"];
$pwd = "$_POST[password]";
if ($user=='admin' & $pwd=='admin'){
	header("location: ../admin.html");
}
$sql = "SELECT Password, aadhar, email ,verification
 	 FROM registration
     WHERE email='$user' or aadhar='$user' ";

$result = mysqli_query($conn,$sql);
while ($row = $result->fetch_assoc()) {
$_SESSION["aadhar1"]= $row['aadhar'];
$_SESSION["email"]= $row['email'];

if ($pwd == $row['Password']) 
	{
		if ($row['verification']=='verified') 
	{
       
		header("location: ../ballot.html");
	}
	else{
		echo "you are not a verified user";
	}
	}
    if ($pwd != $row['Password'])
    
	{
        echo "<script>window.open('index.html','_self')</script>";
       
	}
}
?>
</body>
</html>