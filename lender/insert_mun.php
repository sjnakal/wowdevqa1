<?php 
include "connect.php"; 
$country= $_POST['country'];
$province = $_POST['state'];
$district = $_POST['district'];
$zone = $_POST['zone'];
$mun =mysqli_real_escape_string($con, $_POST['mun']);
$insert_zone="INSERT INTO `municipality`(`mun_name`, `fk_district_id`) VALUES ('$mun','$district')";
$run=mysqli_query($con,$insert_zone);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:mun.php');
}
else{
	echo "error". $insert_zone . "<br>" .$con->error;
}

 ?>
 ?>