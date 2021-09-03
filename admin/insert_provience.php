<?php
include "connect.php"; 
$country_name = $_POST['country_name'];
$province = $_POST['name'];
$query="INSERT INTO `provience`(`provience_name`, `fk_country_id`) VALUES ('$province','$country_name')";
$run=mysqli_query($con,$query);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:province.php');
}
else{
	echo "error". $query . "<br>" .$con->error;
}

 ?>