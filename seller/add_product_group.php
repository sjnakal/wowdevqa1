 

<?php include "include/header.php"; ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

             <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="post" action="insert_product_group.php" enctype="multipart/form-data">
                      
                        <div class="x_title">
                    <h2> Add new Product group </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Category Name</label>
              <div class="col-md-10">
              <select class="form-control" name="level_1">
          <option>Select Category</option>
          <?php 
          include "../admin/connect.php";
          $select="SELECT * FROM category";
          $ecexute=mysqli_query($con,$select);
          while ($selected_category=mysqli_fetch_array($ecexute)) {
         ?>
           <option value="<?php echo $selected_category['cat_id'];?>"><?php echo $selected_category['cat_name'];?></option>;
          <?php } ?>
    
        </select>
              </div>
            </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        
                          <label  class="col-md-2" for="heard">Product Group Name</label>
                          <div class="col-md-10">
						  <input type="text" class="form-control" id="heard" required="" name="product_group_name">
                          
                        </div>
                       
                      </div>

                   
                    </div>
                      
                     
        
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <button class="btn btn-danger btn-sm" style="float:left;" onclick="history.back()">Back</button>

                        <button class="btn btn-primary btn-sm" name="submit" type="submit" o style="float:left;">Save</button>

                        </div>
                     
                   
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of the top -->
  
          </div>
        </div>
        <!-- /page content -->
        <?php include "include/footer.php"; ?>