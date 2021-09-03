<?php
include "connect.php"; 
$country= $_POST['country'];
$district =mysqli_real_escape_string($con,$_POST['district']);
$province = $_POST['state'];

$insert_zone="INSERT INTO `district`(`district_name`, `fk_peovince_id`) VALUES ('$district','$province')";
$run=mysqli_query($con,$insert_zone);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:district.php');
}
else{
	echo "error". $insert_zone . "<br>" .$con->error;
}

 ?>