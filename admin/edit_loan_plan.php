<?php include "header.php"; ?>
<?php include('connect.php'); ?>
<?php 

if (isset($_GET['edit'])) {
    $loan_id = $_GET['edit'];
// Update category
if(isset($_POST["submit"])) {
$month=$_POST['month'];
$interest=$_POST['interest'];
$penalty=$_POST['penalty'];


//$update_loan= "UPDATE `loan_plan` SET `cat_name`='$cat_name' WHERE loan_id='$loan_id'";
$update_loan= "UPDATE `loan_plan` SET `month`='$month',`interest`='$interest',`penalty`='$penalty' WHERE loan_id='$loan_id'";
$result = mysqli_query($con,$update_loan);
if($result){
  echo "<script> location.href='loan_plan.php';</script>";
}
else {
  echo "error";
}

}
}

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="container">
    
    <div class="clearfix"></div>
    <!-- Start of add country form row -->
    <div class="row">
      
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            
            <h2 style="color:red">
            
            </h2>
            
            <h2>Edit Loan Plan</h2>
            
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <!--<li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
            </li>-->
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
   
  <div class="x_content form-group">
    <form class="form-horizontal form-label-left input_mask" method="post" action="" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          
          <?php 
          $sql ="SELECT * FROM `loan_plan` WHERE loan_id = '$loan_id'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          ?>

          <label  class="col-md-2 control-label" for="month">Plan Months</label>
          <div class="col-md-6">
            <input type="text" class="form-control" id="month" placeholder=" Enter Months" name="month" required="" value="<?php echo $row['month']; ?>">
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          <label  class="col-md-2 control-label" for="rate">Interest Rate(%)</label>
          <div class="col-md-6">
            <input type="text" class="form-control" id="rate" placeholder=" Enter Interest Rate" name="interest" required="" value="<?php echo $row['interest']; ?>">
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          <label  class="col-md-2 control-label" for="penalty">Monthly Over due's Penalty(%)</label>
          <div class="col-md-6">
            <input type="text" class="form-control" id="penlty" placeholder=" Enter Penaalty Rate" name="penalty" required="" value="<?php echo $row['penalty']; ?>">

          </div>
        </div>
        <div class="col-md-2">
          <button class="btn btn-danger btn-sm" style="float:left;" onclick="history.back()">Back</button>
          <button class="btn btn-primary btn-sm" name="submit" type="submit"  style="float:left;">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<!-- end of add Country Form Row -->

</div>
</div>
<!-- /page content -->
<?php include "footer.php"; ?>