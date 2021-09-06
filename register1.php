<?php 
include "admin/connect.php";
if(isset($_POST["submit"])) {
$lname=mysqli_real_escape_string($con,$_POST['lname']);
$lemail=mysqli_real_escape_string($con,$_POST['lemail']);
$lmobile=mysqli_real_escape_string($con,$_POST['lmobile']);
$lphone=mysqli_real_escape_string($con,$_POST['lphone']);
$lusername=mysqli_real_escape_string($con,$_POST['lusername']);
$lpassword = mysqli_real_escape_string($con,$_POST['lpassword']);
$lpan=mysqli_real_escape_string($con,$_POST['lpan']);
$laccount=mysqli_real_escape_string($con,$_POST['laccount']);
$country=mysqli_real_escape_string($con,$_POST['country']);
$province=mysqli_real_escape_string($con,$_POST['state']);
$district=mysqli_real_escape_string($con,$_POST['district']);
$mun=mysqli_real_escape_string($con,$_POST['mun']);
$ward=mysqli_real_escape_string($con,$_POST['ward']);
$tol=mysqli_real_escape_string($con,$_POST['tol']);
$zip_code=mysqli_real_escape_string($con,$_POST['zipcode']);
$reg_date= date('Y-m-d h:m:s');
$status=mysqli_real_escape_string($con,$_POST['status']);

$target_dir = "assets/lender_images/";

$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$img="assets/lender_images/".basename($_FILES["fileToUpload"]["name"]);


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$insert="INSERT INTO `lender`(`bank_name`,`email`, `mobile`, `phone`, `username`, `password`, `account_no`, `pan_no`, `fk_country_id`, `fk_provience_id`, `fk_district_id`, `fk_mun_id`, `fk_ward_id`, `zip_code`, `tole`, `fk_status_id`, `image`, `reg_date`) VALUES ('$lname','$lemail','$lmobile','$lphone','$lusername','$lpassword','$laccount','$lpan','$country','$province','$district','$mun','$ward','$zip_code','$tol','$status','$img','$reg_date')";

        if (mysqli_query($con,$insert)) {
          echo "Successfully Submitted";
          header('location:index.php');
        }else{
          echo "Error in inserting Data to Database table";
          mysqli_error($con);
        }
      }
   



?>


<?php 
include "admin/connect.php";
if(isset($_POST["submit"])) {
$bname=mysqli_real_escape_string($con,$_POST['bname']);
$bemail=mysqli_real_escape_string($con,$_POST['bemail']);
$bmobile=mysqli_real_escape_string($con,$_POST['bmobile']);
$bphone=mysqli_real_escape_string($con,$_POST['bphone']);
$busername=mysqli_real_escape_string($con,$_POST['busername']);
$bpassword = mysqli_real_escape_string($con,$_POST['bpassword']);
$dob = mysqli_real_escape_string($con,$_POST['dob']);
$bpan=mysqli_real_escape_string($con,$_POST['bpan']);
$b_name = mysqli_real_escape_string($con,$_POST['bankname']);
$account_name=mysqli_real_escape_string($con,$_POST['accountname']);
$baccount = mysqli_real_escape_string($con,$_POST['baccount']);
$country1=mysqli_real_escape_string($con,$_POST['country']);
$province1=mysqli_real_escape_string($con,$_POST['state']);
$district1=mysqli_real_escape_string($con,$_POST['district']);
$mun1=mysqli_real_escape_string($con,$_POST['mun']);
$ward1=mysqli_real_escape_string($con,$_POST['ward']);
$tol1=mysqli_real_escape_string($con,$_POST['tol']);
$zip_code1=mysqli_real_escape_string($con,$_POST['zipcode']);
$reg_date1= date('Y-m-d h:m:s');
$status1=mysqli_real_escape_string($con,$_POST['status']);

$target_dir1 = "assets/borrower_images/";

$target_file1 = $target_dir1 .basename($_FILES["fileToUpload"]["name"]);
$img1="assets/borrower_images/".basename($_FILES["fileToUpload"]["name"]);


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1);

$insert2="INSERT INTO `borrower`(`name`, `email`, `mobile`, `phone`, `user_name`, `password`, `dob`, `pan_no`, `bank_name`, `account_name`, `account_no`, `fk_country_id`, `fk_provience_id`, `fk_district_id`, `fk_mun_id`, `fk_ward_id`, `zip_code`, `tole`, `fk_status_id`, `image`, `reg_date`) VALUES ('$bname','$bemail','$bmobile','$bphone','$busername','$bpassword','$dob','$bpan','$b_name','$account_name','$baccount','$country1','$province1','$district1','$mun1','$ward1','$zip_code1','$tol1','$status1','$img1','$reg_date1')";

        if (mysqli_query($con,$insert2)) {
          echo "Successfully Submitted";
          header('location:index.php');
        }else{
          echo "Error in inserting Data to Database table";
          mysqli_error($con);
        }
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
    <link rel="icon" href="images/favicn.ico" type="image/ico" />
    <title>Credit Financial System</title>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <!-- Ajax fetch script -->
     <!-- link Data Tables -->

    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <!-- End of datatable links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
  

<!-- page content -->
<div class="right_col" role="main">
<div class="container">
<div class="row">
  
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        
        <h2 style="color:red">
        
        </h2>
        
        <h2 style="text-center;">Create Your Account</h2>
        

</div>
<div class="x_content">
<form class="form-horizontal input_mask" method="post" action="" enctype="multipart/form-data">
  

<div class="row">
  <!-- personal information -->
  
  <div class="row">
 <div class="form-group col-md-6">
 
    <label for="role" class="col-md-3 font-weight-bold pl-2">User Type</label>
    <input type="radio" name="user_type" value="lender" style="margin-left:10px;"    onclick="showExtra2('lender')"><span > Lender</span>
    <input type="radio" name="user_type" value="borrower" style="margin-left:10px;" onclick="showExtra1('borrower')"><span> Borrower</span>

 </div>
 
</div>

<div class="row" id="lender"></div>
<div class="row" id="borrower"></div>


    
    
  

<!-- personal information end -->
<!-- Location information start-->
  <div class="row mt-3">
      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
       <label  class="col-md-2" for="heard">Country</label>
         <div class="col-md-10 col-ms-4">
        
         <select class="form-control action" name="country" id="country">
          <option>Choose Country</option>
          
          <?php
          include "admin/connect.php";
          $country = '';
          $query="SELECT * FROM country GROUP BY country_name ORDER BY country_name ASC";
          $result=mysqli_query($con,$query);
          while ($selected_country=mysqli_fetch_array($result)) {
          echo "<option value=".$selected_country[0].">".$selected_country[1]."</option>";
          }

          
          ?>
          
        </select>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">Province </label>
      <div class="col-md-10 col-ms-4">
        <select name="state" id="state" class="form-control action">
          <option value="">Select Province</option>
        </select>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">District </label>
      <div class="col-md-10 col-ms-4">
        <select name="district" id="district" class="form-control action">
          <option value="">Select district</option>
        </select>
      </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">Local <small>eg.mun/VDC</small> </label>
      <div class="col-md-10 col-ms-4">
        <select name="mun" id="mun" class="form-control action">
          <option value="">Local level</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    
    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">Ward No.</label>
      <div class="col-md-10 col-ms-4">
      <select name="ward" id="ward" class="form-control action">
        <option value=""> Choose Ward Number</option>
       
                   
      </select>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
        <label for="zip" class="col-md-2 font-weight-bold pl-2">Zip Code</label>
      <div class="col-md-3 col-ms-3">
        <input type="number"class="form-control" id="zip" placeholder="Zip Code" name="zipcode">
      </div>
    </div>
  </div>
   <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12 form-group ">
    <label class="col-md-2" for="heard">Tole Name</label>
    <div class="col-md-10 col-ms-4">
      <input type="text" name="tol" class="form-control" id="heard" placeholder="Tole Name" >
    </div>
  </div>
  
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">Status</label>
      <div class="col-md-10 col-ms-4">
       <select name="status" class="form-control action">
       
         <!-- <option value="1">Active</option>
         <option value="2">Disable</option> -->
          
         <?php
          include "admin/connect.php";
          $status = '';
          $query1="SELECT * FROM `status` GROUP BY status_name ORDER BY status_name ASC";
          $result1=mysqli_query($con,$query1);
          while ($selected_status=mysqli_fetch_array($result1)) {
          echo "<option value=".$selected_status[0].">".$selected_status[1]."</option>";
          }

          
          ?>
         

       </select>
      </div>
  </div>
</div>
<div class="row">

  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback file-field">
    <label class="col-md-2">Profile picture</label>
    <div class="col-md-6 col-ms-4">
      
      <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" multiple="multiple">
    </div>
  </div>
    <!-- End of Selection of Address -->
    <div class="col-md-2 col-ms-4 col-xs-3  col-xl-2">
      <input type="button" class="btn btn-primary btn-sm" value="Go back!" style="float:left;" onclick="history.back()">
      <button class="btn btn-primary btn-sm" name="submit" type="submit"  style="float:right;">Submit</button>
      
    </div>
  </div>
    
    
  
</form>

</div>
</div>
</div>
</div>
<!--end of top-->
<script>
$(document).ready(function(){


$('.action').change(function(){
if($(this).val() != '')
{
var action = $(this).attr("id");
var query = $(this).val();
var result = '';
if(action == "country")
{
result = 'state';
}
else if(action == "state")
{
result = 'district';
}
else if(action == "district"){
result = 'mun';
}
else if(action=="mun"){
result = 'ward';
}
else if(action=="ward"){
result = 'home';
}
else{
result ='home';
}
$.ajax({
url:"admin/fetch.php",
method:"POST",
data:{action:action, query:query},
success:function(data){
$('#'+result).html(data);
}
})
}
});
});



function showExtra1(givenType){

  const htmlpart = `<div class="row">
  <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="name" class="col-md-2 font-weight-bold pl-2">Full Name</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="Name" name="bname" required="required">
          </div>

        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="email" class="col-md-2 font-weight-bold pl-2">Email:</label>
            <div class="col-md-10 col-ms-4">
          <input type="email" class="form-control" placeholder="Email" name="bemail" required="required">
          </div>
        </div>
      </div>


      <div class="row">
  <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="phone" class="col-md-2 font-weight-bold pl-2">Mobile Number</label>
            <div class="col-md-10 col-ms-4">
           <input type="phone" class="form-control" placeholder="Mobile Number" name="bmobile" pattern="[0-9]{2}[0-9]{8}" required="required">
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label for="phone" class="col-md-2 font-weight-bold pl-2">Phone</label>
            <div class="col-md-10 col-ms-4">
         <input type="text" class="form-control" placeholder="Phone" name="bphone" required="required"> 
          </div>
        </div>
</div>
    <div class="row">

  <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="username" class="col-md-2 font-weight-bold pl-2">Username</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="Username" name="busername" required="required">
          </div>
        </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="password" class="col-md-2 font-weight-bold pl-2">Password</label>
            <div class="col-md-10 col-ms-4">
           <input type="password" class="form-control" placeholder="password" name="bpassword" required="required">
          </div>
 </div>
</div>

<div class="row">
  <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="date" class="col-md-2 font-weight-bold pl-2">DOB</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="date" class="form-control" placeholder="DOB" name="dob" required="required">
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="pan" class="col-md-2 font-weight-bold pl-2">PAN NO</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="Pan Number" name="bpan" required="required">
          </div>
        </div>
      </div>

      <div class="row">

  <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="bank" class="col-md-2 font-weight-bold pl-2">Bank Name</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="Bank Name" name="bankname" required="required">
          </div>
        </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="aname" class="col-md-2 font-weight-bold pl-2">Account Name</label>
            <div class="col-md-10 col-ms-4">
           <input type="text"  class="form-control" placeholder="Account Name" name="accountname" required="required">
          </div>
 </div>
</div>

<div class="row">

  <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="account" class="col-md-2 font-weight-bold pl-2">Account No.</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="0000 0000 0000 0000" name="baccount" required="required">
          </div>
        </div>
</div>`

if(givenType=='borrower'){
    $('#borrower').html(htmlpart);}
    $('#lender').empty();


}



function showExtra2(givenType){
    const htmlpart = `<div class="row">
  <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="hard" class="col-md-2">Bank Name</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="Bank Name" name="lname" required="required">
          </div>

        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="email" class="col-md-2">Email:</label>
            <div class="col-md-10 col-ms-4">
          <input type="email" class="form-control" placeholder="Email" name="lemail" required="required">
          </div>
        </div>
      </div>

       <div class="row">
  <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="phone" class="col-md-2">Mobile Number</label>
            <div class="col-md-10 col-ms-4">
           <input type="phone" class="form-control" placeholder="Mobile Number" name="lmobile" pattern="[0-9]{2}[0-9]{8}" required="required">
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label for="phone" class="col-md-2">Phone</label>
            <div class="col-md-10 col-ms-4">
         <input type="text" class="form-control" placeholder="Phone" name="lphone" required="required"> 
          </div>
        </div>
</div> 

<div class="row">

  <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="username" class="col-md-2">Username</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="Username" name="lusername" required="required">
          </div>
        </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
           <label for="password" class="col-md-2">Password</label>
            <div class="col-md-10 col-ms-4">
           <input type="password" class="form-control" placeholder="password" name="lpassword" required="required">
          </div>
 </div>
</div>

<div class="row">
  <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="account" class="col-md-2">Account No.</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="0000 0000 0000 0000" name="laccount" required="required">
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12">

           <label for="pan" class="col-md-2 ">PAN NO</label>
           
            <div class="col-md-10 col-ms-4">
           <input type="text" class="form-control" placeholder="Pan Number" name="lpan" required="required">
          </div>
        </div>
      </div>`

    if(givenType=='lender'){
    $('#lender').html(htmlpart);}
    $('#borrower').empty();
    
}




</script>
</div>
</div>
<!-- /page content -->


<!-- footer content -->
<footer style="position: fixed;left: 0;bottom: 0; width: 100%;">
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- End main Container -->
    </div>
    <!-- End Container body -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
  <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- end of Data tables -->
	  <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>