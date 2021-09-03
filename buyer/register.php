<?php
    include('../admin/connect.php');
    if(isset($_REQUEST['rSignup'])){
      if(($_REQUEST['sName'] == "") || ($_REQUEST['sEmail'] == "") || ($_REQUEST['sPassword'] == "") || ($_REQUEST['sPhone'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert">All Feilds are required<div>';
      } else {
        $sql = "SELECT u_email FROM userlogin_tb WHERE u_email='".$_REQUEST['sEmail']."' ";
        $result=$con->query($sql); 
        if($result->num_rows==1){
            $regmsg ='<div class="alert alert-warning mt-2" role="alert">Email ID Already Registered</div>';
        } else {
        $sName = $_REQUEST['sName'];
        $sEmail = $_REQUEST['sEmail'];
        $sPassword = $_REQUEST['sPassword'];
        $sPhone = $_REQUEST['sPhone'];
        $sql ="INSERT into buyerlogin_tb (username, email, b_password, phone) VALUES('$sName', '$sEmail', '$sPassword', '$sPhone')";
        if($con->query($sql) == true){
            $regmsg = '<div class="alert alert-success mt-2" role="alert">Account successfully created</div>';
        } else{
            $regmsg = '<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
        }
       }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<div class="container pt-5">
     <div class="mt-3 text-center" style="font-size: 30px;">

   <span style="font-family: 'Roboto', sans-serif;">Create An Account</span>
     </div> 
     <div class="row mt-4 mb-4">
      <div class="col-md-6 offset-md-3">
        <form action="" class="shadow-lg p-4" method="post">
          <div class="form-group">
           <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="sName">
          
          <div class="form-group">
           <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="sEmail">
          </div>
          <div class="form-group">
           <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label><input type="password" class="form-control" placeholder="Name" name="sPassword">
          </div>
          <div class="form-group">
          <i class="fas fa-mobile-alt"></i><label for="phone" class="font-weight-bold pl-2">Mobile Number</label><input type="text" class="form-control" placeholder="Mobile Number" name="sPhone" pattern="[0-9]{2}[0-9]{8}"> 
          </div>
         <button type="submit" class="btn btn-dark mt-4 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button> 
         <div class="container signin">
          <p>Already have an account? <a href="login_form.php">Sign in</a>.</p>
         </div>
         <?php if(isset($regmsg)) {echo "$regmsg";}?>
        </form>
      </div>
     </div>
</div>

<!-- javascript -->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/boostrap.min.js"></script>
   <script src="../js/all.min.js"></script>
</body>
</html>