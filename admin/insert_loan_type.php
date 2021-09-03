<?php
include "connect.php";
if(isset($_POST['submit'])){
$loan_type=$_POST['loan_name'];
$insert_loan="INSERT INTO `loan_type`(`loan_name`) VALUES ('$loan_type')";
echo $insert_loan;
$run=mysqli_query($con,$insert_loan);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:loan_type.php');
}
else{
	echo "error". $insert_loan . "<br>" .$con->error;
}
}
?>