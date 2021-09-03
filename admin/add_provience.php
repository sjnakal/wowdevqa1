<?php
//Delete Operation
if(isset($_GET['del'])){
  include "connect.php";
  $city_id=$_GET['del'];
  $delete_content="DELETE FROM provience WHERE provience_id=$city_id";
  $run=mysqli_query($con, $delete_content);
  if($run){
    echo "Deleted Successfully";
  }
  header('location:province.php');
}
?>
<?php include "header.php"; ?>
<!-- page content -->
<div class="right_col" role="main">
<div class="">

<div class="clearfix"></div>
<div class="row">
  
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        
        <h2 style="color:red">
        
        </h2>
        
        <h2>Add Provience</h2>
        
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
<form class="form-horizontal form-label-left input_mask" method="post" action="insert_provience.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
      <label  class="col-md-1" for="heard">Country</label>
      <div class="col-md-4">
        
        <select class="form-control" name="country_name">
          <option>Choose Country</option>
          <?php 
          include "connect.php";
          $select="SELECT * FROM country ";
          $ecexute=mysqli_query($con,$select);
          while ($selected_country=mysqli_fetch_array($ecexute,MYSQLI_NUM)) {
              echo "<option value='$selected_country[0]'>$selected_country[1]</option>";
          }
           ?>
        </select>
      </div>
       <label  class="col-md-2" for="heard">Provience Name</label>
      <div class="col-md-5">
        
        <input type="text" class="form-control" id="heard" placeholder="Enter Country name" name="name" required="">
      </div>
    </div>
    
    <div class="col-md-3">
      
      <button class="btn btn-primary btn-md" name="submit" type="submit"  style="float:right;">Submit</button>
      <input type="button" class="btn btn-primary btn-md" value="Go back!" style="float:right;" onclick="history.back()">
    </div>
    
  </div>
</form>

</div>
</div>
</div>
</div>
<!--end of top-->

</div>
</div>
<!-- /page content -->


<?php include "footer.php"; ?>