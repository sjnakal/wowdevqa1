
<?php INCLUDE "header.php"; ?>
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
        
        <h2>Add Vendor </h2>
        
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
<form class="form-horizontal input_mask" method="post" action="insert_vendor.php" enctype="multipart/form-data">
  

<div class="row">
  <!-- personal information -->
 
  <div class="form-group col-md-6">
           <label for="name" class="col-md-2 font-weight-bold pl-2">Name</label>
           
            <div class="col-md-10">
           <input type="text" class="form-control" placeholder="Name" name="name">
          </div>

        </div>
        <div class="form-group col-md-6">
           <label for="mobile" class="col-md-2 font-weight-bold pl-2">Email:</label>
            <div class="col-md-10">
          <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
        </div>
      </div>


      <div class="row">
  <div class="form-group col-md-6">
           <label for="mobile" class="col-md-2 font-weight-bold pl-2">Mobile Number</label>
            <div class="col-md-10">
           <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" pattern="[0-9]{2}[0-9]{8}">
          </div>
        </div>
        <div class="form-group col-md-6">
            <label for="phone" class="col-md-2 font-weight-bold pl-2">Phone</label>
            <div class="col-md-10">
         <input type="text" class="form-control" placeholder="Phone" name="phone"> 
          </div>
        </div>
  </div>

    <div class="row">
    <div class="form-group col-md-6">
        <label for="email" class="col-md-2 font-weight-bold pl-2">PAN NO</label>
      <div class="col-md-10">
        <input type="number"class="form-control" placeholder="PAN NO" name="pan">
      </div>
    </div>
    <div class="form-group col-md-6">
        <label for="email" class="col-md-2 font-weight-bold pl-2">Seller Type</label>
        <div class="col-md-10">
          <select name="seller_type" class="form-control action">
           <option value="1">Whole seller</option>
           <option value="2">Farmer</option>
          </select>
        </div>
    </div>
</div>
<!-- personal information end -->
<!-- Location information start-->
  <div class="row mt-3">
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
          <option value="">Select district</option>
        </select>
      </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">Local <small>eg.mun/VDC</small> </label>
      <div class="col-md-10">
        <select name="mun" id="mun" class="form-control action">
          <option value="">Local level</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    
    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">Ward No.</label>
      <div class="col-md-10">
      <select name="ward" class="form-control action">
        <option> Choose Ward Number</option>
        <option value="1">1</option>
         <option value="2">2</option>
          <option value="3">3</option>
           <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
         <option value="7">7</option>
          <option value="8">8</option>
           <option value="9">9</option>
            <option value="10">10</option>
            
            <option value="11">11</option>
         <option value="12">12</option>
          <option value="13">13</option>
           <option value="14">14</option>
            <option value="15">15</option>
                   
      </select>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <label class="col-md-2" for="heard"><small>Tole</small></label>
    <div class="col-md-10">
      <input type="text" name="tol" class="form-control input-sm" id="heard" placeholder="Tole Name" >
    </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <label class="col-md-2" for="heard"><small>Street</small></label>
    <div class="col-md-10">
      <input type="text" name="street" class="form-control input-sm" id="heard" placeholder="Street Name" >
    </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <label class="col-md-2" for="heard"><small>Public Place Near:-</small></label>
    <div class="col-md-10">
      <input type="text" name="public_place_near" class="form-control input-sm" id="heard" placeholder="eg:- School,Hospital,Temple etc" >
    </div>
  </div>

  
  
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
      <label  class="col-md-2" for="heard">Status</label>
      <div class="col-md-10">
       <select name="status" class="form-control action">
         <option value="1">Active</option>
         <option value="2">Disable</option>
       </select>
      </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback file-field">
    <label class="col-md-4">Profile picture</label>
    <div class="btn btn-rounded purple-gradient btn-sm float-left col-md-8">
      
      <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" multiple="multiple">
    </div>
  </div>
</div>
    <!-- End of Selection of Address -->
    <div class="col-md-3">
      <input type="button" class="btn btn-primary btn-sm" value="Go back!" style="float:left;" onclick="history.back()">
      <button class="btn btn-primary btn-sm" name="submit" type="submit"  style="float:left;">Submit</button>
      
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
<?php INCLUDE "footer.php"; ?>