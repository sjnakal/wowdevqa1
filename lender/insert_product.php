<?php 
include "connect.php";
if(isset($_POST["submit"])) {
$prod_name=$_POST['product_name'];
$product_group=$_POST['product_group'];
$description=$_POST['description'];
$product_rate=$_POST['product_rate'];

$product_unit_price=$_POST['product_unit_price'];
$vendor_name = $_POST['vendor_name'];
$target_dir = "../assets/images/products/";

$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]); 
$wwww ="assets/images/products/".basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  	$insert_prod="INSERT INTO `product_detail`(`product_name`, `product_group_fk`, `product_des`, `product_rate`, `unit_type`, `product_image`, `fk_vendor_id`) VALUES('$prod_name','$product_group','$description','$product_rate','$product_unit_price','$wwww','$vendor_name')";
	 $run=mysqli_query($con,$insert_prod);
	 if($run){
		 echo"Successfully Submitted";
	 header('location:products.php');
	 }else{
	 	echo "error".mysqli_error($con);
	 }
	}




?>