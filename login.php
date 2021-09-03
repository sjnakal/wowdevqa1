<?php
    include('admin/connect.php');
    session_start();
    if(isset($_REQUEST['sEmail'])){
    $sEmail=mysqli_real_escape_string($con,trim($_REQUEST['sEmail']));
    $sPassword=mysqli_real_escape_string($con, trim($_REQUEST['sPassword']));
    $sql = "SELECT * FROM organization WHERE organization.email = '".$sEmail."' OR organization.name = '".$sEmail."' AND organization.pass ='".$sPassword."' limit 1";
    $result = $con->query($sql);
    $row = mysqli_fetch_assoc($result);
    if($result->num_rows==1){
      $_SESSION['is_login'] = true;
      $_SESSION['email'] = $row['email'];
      $_SESSION['username'] = $row['name'];
      $_SESSION['id'] = $row['id'];
      if($row['role']=="lender"){
      echo "<script> location.href='lender/lenderprofile.php';</script>";
      }
      elseif($row['role']=="borrower"){
        echo "<script> location.href='borrower/borrowerprofile.php';</script>"; 
      }
    } else{
      $msg= '<div class="alert alert-warning mt-2">Enter valid Email and Password</div>';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- Bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css"> 

   <!-- Font Awesome css -->
   <link rel="stylesheet" href="css/all.min.css ">

   <div class="mt-5 text-center" style="font-size: 30px;">
   <span style="font-family: 'Roboto', sans-serif;">Financial Credit Sytem</span>
   </div>
   <div class="container-fluid">
   <div class="row justify-content-center">
   <div class="col-sm-6 col-md-4">
   <form action="" class="shadow-lg p-4" method="post">
   <div class="form-group">
       <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email/Username</label><input type="text" class="form-control" placeholder="Email or Username" name="sEmail">
   </div>
   <div class="form-group">
       <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="sPassword">
 </div>
 <div class="row">
  <div class="clo-md-6 ml-auto">
 <input class="form-check-input m-1" type="checkbox"><p class="mx-4"> Remember me</p>
  
</div>
<div class="col-md-6 ">
 <a class="float-left" href="">Forget Password</a>
 </div>
 </div>

 <button type="submit" class="btn btn-outline-danger mt-2 font-weight-bold btn-block shadow-sm">Login</button>
 <?php 
 if(isset($msg)){echo $msg;}
 ?>
 <div class="container signin">
    <p>Do you have account? <a href="register.php">Register now</a>.</p>
  </div>
   </form>
   </div>
   </div>
   </div>
   
<!-- javascript -->
    <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/boostrap.min.js"></script>
   <script src="js/all.min.js"></script>
</body>
</html>