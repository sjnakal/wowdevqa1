<?php
include "connect.php"; 
$country= $_POST['country'];
$zone_name =mysqli_real_escape_string($con, $_POST['Z_name']);
$province = $_POST['state'];
$insert_zone="INSERT INTO `zone`(`zone_name`, `fk_provience_id`, `fk_country_id`) VALUES ('$zone_name','$province','$country')";
$run=mysqli_query($con,$insert_zone);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:zone.php');
}
else{
	echo "error". $insert_zone . "<br>" .$con->error;
}

 ?>