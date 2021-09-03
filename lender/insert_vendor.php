<?php 
include "connect.php";
$vendor_name=mysqli_real_escape_string($con,$_POST['name']);
$vendor_email=mysqli_real_escape_string($con,$_POST['email']);
$vendor_pan=mysqli_real_escape_string($con,$_POST['pan']);
$vendor_phone=mysqli_real_escape_string($con,$_POST['phone']);
$vendor_mobile=mysqli_real_escape_string($con,$_POST['mobile']);

$vendor_type=mysqli_real_escape_string($con,$_POST['seller_type']);

$country=mysqli_real_escape_string($con,$_POST['country']);
$province=mysqli_real_escape_string($con,$_POST['state']);

$district=mysqli_real_escape_string($con,$_POST['district']);
$mun=mysqli_real_escape_string($con,$_POST['mun']);
$ward=mysqli_real_escape_string($con,$_POST['ward']);
$tol=mysqli_real_escape_string($con,$_POST['tol']);
$street=mysqli_real_escape_string($con,$_POST['street']);
$register_date= date('Y-m-d h:m:s');
$status=mysqli_real_escape_string($con,$_POST['status']);


$public_place_near=mysqli_real_escape_string($con,$_POST['public_place_near']);
$target_dir = "../assets/images/vendor/";

$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$ddd ="assets/images/vendor/".basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    $insert= "INSERT INTO `organization`( `name`, `email`, `pan`, `phone`, `mobile`, `fk_type_farmer`, `image`, `fk_country`, `fk_province`, `fk_district`, `fk_municipal`, `ward_no`, `tole`, `street`, `near_place`, `reg_date`, `status`) VALUES  ('$vendor_name','$vendor_email','$vendor_pan','$vendor_phone', '$vendor_mobile', '$vendor_type','$ddd', '$country','$province','$district','$mun','$ward', '$tol', '$street', '$public_place_near', '$register_date','$status')"; 
if (mysqli_query($con,$insert)) {
  echo "Successfully Submitted";
  header('location:vendor.php');
}else{
  echo "Error in inserting Data to Database table";
  mysqli_error($con);
}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



 ?>