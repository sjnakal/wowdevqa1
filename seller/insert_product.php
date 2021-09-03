<?php 
include "../admin/connect.php";
include('include/header.php');
if(isset($_POST["submit"])) {
$prod_name=$_POST['product_name'];
$product_group=$_POST['product_group'];
$description=$_POST['description'];
$product_rate=$_POST['product_rate'];
$product_unit_price=$_POST['product_unit_price'];
$target_dir = "../assets/images/products/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]); 
$img="assets/images/products/".basename($_FILES["fileToUpload"]["name"]);




  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
  	$insert_prod ="INSERT INTO `product_detail`(`product_name`, `product_group_fk`, `product_des`, `product_rate`, `unit_type`,`fk_vendor_id`, `product_image`) VALUES('$prod_name','$product_group','$description','$product_rate','$product_unit_price','{$_SESSION['id']}','$img')";
	 $run=mysqli_query($con,$insert_prod);
	 if($run){
		 echo"Successfully Submitted";
		 echo "<script> location.href='products.php';</script>";
	 }else{
	 	echo "error".mysqli_error($con);
	 }
    }
    else {
        echo "Sorry, there was an error uploading your file.";
      }




?>