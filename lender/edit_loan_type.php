<?php include "header.php"; ?>
<?php include('connect.php'); ?>
<?php 

if (isset($_GET['edit'])) {
    $loan_id = $_GET['edit'];
// Update category
if(isset($_POST["submit"])) {
$loan_name=$_POST['loan_name'];
$update_loan= "UPDATE `loan_type` SET `loan_name`='$loan_name' WHERE loantype_id='$loan_id'";
$result = mysqli_query($con,$update_loan);
if($result){
  echo "<script> location.href='loan_type.php';</script>";
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
            
            <h2>Edit Category</h2>
            
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
  <div class="x_content">
    <form class="form-horizontal form-label-left input_mask" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          <label  class="col-md-2" for="heard">Categoty Name</label>
          <div class="col-md-6">
          <?php $sql ="SELECT * FROM `loan_type` WHERE loantype_id = '$loan_id'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          ?>
            <input type="text" class="form-control" id="heard" placeholder=" Enter Category name" name="loan_name" required="" value="<?php echo $row['loan_name']; ?>">
          </div>
        </div>
        <div class="col-md-2">
           <button class="btn btn-danger btn-sm" style="float:left;" onclick="history.back()">Back</button>
          <button class="btn btn-primary btn-sm" name="submit" type="submit"  style="float:left;">Update</button>
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