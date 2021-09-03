<?php
include('connect.php');
if(isset($_POST['submit'])){
  $month = $_POST['month'];
  $interest = $_POST['interest'];
  $penalty = $_POST['penalty'];

  $insert_loan= "INSERT INTO `loan_plan`(`month`, `interest`, `penalty`) VALUES ('$month','$interest','$penalty')";
     
     echo $insert_loan;
$run=mysqli_query($con,$insert_loan);
if(($run)==TRUE){
	echo "Successfully Submitted";
	header('location:loan_plan.php');
}
else{
	echo "error". $insert_loan . "<br>" .$con->error;
}
}
?>
