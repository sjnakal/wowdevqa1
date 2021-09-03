<?php 
include "connect.php"; 
$country= $_POST['country'];
$province = $_POST['state'];
$district = $_POST['district'];
$zone = $_POST['zone'];
$mun = $_POST['mun'];
$ward=mysqli_real_escape_string($con,$_POST['ward']);
$insert_zone="INSERT INTO `add_ward`(`ward_number`, `fk_mun_id`) VALUES ('$ward','$mun')";
$run=mysqli_query($con,$insert_zone);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:ward.php');
}
else{
	echo "error". $insert_zone . "<br>" .$con->error;
}

 ?>
 ?>