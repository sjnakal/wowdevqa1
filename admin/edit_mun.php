<?php include "header.php"; ?>
<?php include('connect.php'); ?>



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
        
        <h2>Edit Municipal <small> (Local Level)</small></h2>
        
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
<form class="form-horizontal form-label-left input_mask" method="post" action="insert_mun.php" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <label  class="col-md-2" for="heard">Country</label>
          <div class="col-md-10">
            
            <select class="form-control action" name="country" id="country">
              <option>Choose Country</option>
              
              <?php
              include "connect.php";
              $country = '';
              $query="SELECT * FROM country GROUP BY country_name ORDER BY country_name ASC";
              $result=mysqli_query($con,$query);
              while ($selected_country=mysqli_fetch_array($result,MYSQLI_NUM)) {
              echo "<option value=".$selected_country[0].">".$selected_country[1]."</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <label  class="col-md-2" for="heard">Province </label>
          <div class="col-md-10">
            <select name="state" id="state" class="form-control action">
              <option value="">Select Province</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <label  class="col-md-2" for="heard">District </label>
          <div class="col-md-10">
            <select name="district" id="district" class="form-control action">
              <option value="">Select Province</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <label  class="col-md-2" for="heard">Municipal </label>
          <div class="col-md-10">
            <input type="text" name="mun" class="form-control action" required="">
          </div>
        </div>
      </div>
      <div class="row">
        
        
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
    url:"fetch.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>


</div>
</div>
<!-- /page content -->

<?php include "footer.php"; ?>