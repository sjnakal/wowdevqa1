<?php
session_start();
if(!isset($_SESSION["login_value"])){
    $_SESSION["login_value"]==0;
    header("location:alogin.php");
}elseif ($_SESSION["login_value"]==1) {
    header("location:index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard</title>

    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="">
              <h1>Login Form</h1>
			  <?php
						if(isset($_POST["login"])){
						include "connect.php";
                        $username=mysqli_real_escape_string($con,$_POST["email"]);
                        $pass=mysqli_real_escape_string($con,$_POST["password"]);
                        $select="select * from admin where user_name ='$username' or email='$username' and password='$pass'";
                        $result=mysqli_query($con,$select);	
                        $row=mysqli_fetch_assoc($result);					
					   if(mysqli_num_rows($result)>=1){
                            $_SESSION["login_value"]=1;
                            $_SESSION["user_name"]=$row['user_name'];
                            header("location:index.php");
                        }else{
                            echo"<div style='height:25px; font-size: 15px; text-align:center; background-color: red;color: white'>
                              User ID or Password Incorrect     
                            </div>";
							echo "<br><br>";
                            $_SESSION["login_value"]=0;
                        }
                    } 
                    ?>
			  
              <div>
                <input type="text" class="form-control" placeholder="email or username" name="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit" name="login">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1></i>FINANCIAL CERDIT SYSTEM</h1>
                  <p>©<?php echo date('Y'); ?> All Rights Reserved.  Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>

