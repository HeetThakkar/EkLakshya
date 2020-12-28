<?php
session_start();
include 'hotel.php';
$hotel= unserialize($_SESSION['hotel']);
?>
<h2> welcome <?php $hotel->showDetails(); ?> </h2>


