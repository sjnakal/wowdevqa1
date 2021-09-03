<?php include "header.php"; ?>
<!-- page content -->
<div class="right_col" role="main">
<div class="">

<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="post" action="insert_product.php" enctype="multipart/form-data">
          
          <div class="x_title">
            <h2>Enter Product Information </h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Name</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard" name="product_name">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Group</label>
              <div class="col-md-10">
                <select id="heard" class="form-control " name="product_group" >
                  <option value="">---Select--</option>
                  <?php
                  include "connect.php";
                  $select_prod_cat="SELECT * FROM  product_group ORDER BY prodgroup_name ASC";
                  $run=mysqli_query($con,$select_prod_cat);
                  while($row=mysqli_fetch_array($run)){
                  ?>
                  <option value="<?php echo $row['prodgroup_id'];?>"><?php echo $row['prodgroup_name'];?></option>
                  <?php }?>
                  
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Vendor Name</label>
              <div class="col-md-10">
                <select id="heard" class="form-control " name="vendor_name" >
                  <option value="">---Select--</option>
                  <?php
                  include "connect.php";
                  $select_prod_cat="SELECT * FROM  organization ORDER BY organization.name ASC";
                  $run=mysqli_query($con,$select_prod_cat);
                  while($row=mysqli_fetch_array($run)){
                  ?>
                  <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                  <?php }?>
                  
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Description</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard"  name="description">
              </div>
            </div>
            
          </div>
          <div class="row">
             
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Rate</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard"  name="product_rate">
              </div>
            </div>
          
          
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Unit type</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard" placeholder="Description" name="product_unit_price">
              </div>
            </div>
            
            
            
          </div>
         <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Image</label>
              <div class="col-md-10">
                <input type="file" class="form-control" id="heard" placeholder="Description" name="fileToUpload">
              </div>
            </div>
         </div>
          <div class="row">
            
            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
              <button class="btn btn-danger btn-md" style="float:right;">Back</button>
              <button class="btn btn-primary btn-md" name="submit" type="submit" o style="float:right;">Save</button>
            </div>
            
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- /page content -->
<?php include "footer.php"; ?>