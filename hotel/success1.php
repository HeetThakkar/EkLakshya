<?
session_start();
echo "your hotel is registered";
$name=$_POST['name'];
$category=$_POST['category'];
$type=$_POST['type'];
$location=$_POST['location'];
$city=$_POST['city'];
$description=$_POST['description'];

include 'hotel.php';
$hotel= new Hotel($name,$category,$type,$location,$city,$description);
$_SESSION['hotel']=serialize($hotel);?>
<a href="viewhotel.php">click here</a>


