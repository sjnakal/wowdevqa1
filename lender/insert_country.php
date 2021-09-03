<?php
include "connect.php";
$country_name=$_POST['name'];
$insert_city="INSERT INTO country(country_name) VALUES('$country_name')";
echo $insert_city;
$run=mysqli_query($con,$insert_city);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:country.php');
}
else{
	echo "error". $insert_city . "<br>" .$con->error;
}
?>