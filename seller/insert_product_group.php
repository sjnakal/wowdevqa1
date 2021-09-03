<?php include'include/header.php';?>
<?php 
include "../admin/connect.php";
$product_category_name=$_POST['level_1'];
$product_group_name=$_POST['product_group_name'];
$insert="INSERT INTO `product_group`(`prodgroup_name`, `fk_category`) VALUES('$product_group_name', '$product_category_name')";
$run=mysqli_query($con,$insert);
if(($run)==TRUE){
	echo "Successfully Submitted";
	echo "<script> location.href='product_group.php';</script>";
}
else{
	echo "error". $insert . "<br>" .$con->error;
}
?>