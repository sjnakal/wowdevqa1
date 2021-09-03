<?php 
include "connect.php";
$product_category_name=$_POST['level_1'];
$product_group_name=$_POST['product_group_name'];
$insert_city="INSERT INTO `product_group`(`prodgroup_name`, `fk_category`) VALUES('$product_group_name', '$product_category_name')";
$run=mysqli_query($con,$insert_city);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:product_group.php');
}
else{
	echo "error". $insert_city . "<br>" .$con->error;
}










 ?>