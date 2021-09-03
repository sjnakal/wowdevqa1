<?php include "header.php"; ?>
<?php include('connect.php'); ?>
<?php

if (isset($_GET['edit'])) {
  $product_id = $_GET['edit'];
// Update product group name
if(isset($_POST["submit"])) {
$product_name=$_POST['product_group_name'];
$select="SELECT * FROM category, product_group where category.cat_id = product_group.fk_category AND product_group.prodgroup_id = '$product_id'";
 $ecexute=mysqli_query($con,$select);
 $selected_category=mysqli_fetch_array($ecexute);

$update_prod= "UPDATE `product_group` SET `prodgroup_name`='$product_name', `fk_category`='".$selected_category['cat_id']."' WHERE prodgroup_id='$product_id'";
$result = mysqli_query($con,$update_prod);
if($result){
echo "<script> location.href='product_group.php';</script>";
}
else {
echo "error";
}

}
}

?>


 

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

             <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="post" enctype="multipart/form-data">
                      
                        <div class="x_title">
                    <h2> Edit Product group </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Category Name</label>
              <div class="col-md-10">
              <select class="form-control" name="level_1">
         
          <?php 
          include "connect.php";
          $select="SELECT * FROM category, product_group where category.cat_id = product_group.fk_category AND product_group.prodgroup_id = '$product_id'";
          $ecexute=mysqli_query($con,$select);
          $selected_category=mysqli_fetch_array($ecexute);
          ?>
         <option value="<?php echo $selected_category['cat_id'];?>"><?php echo $selected_category['cat_name'];?></option>;
        
        </select>
              </div>
            </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        
                   <label  class="col-md-2" for="heard">Product Group Name</label>
                   <div class="col-md-10">
                   <?php $sql ="SELECT * FROM `product_group` WHERE prodgroup_id = '$product_id'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          ?>
						  <input type="text" class="form-control" id="heard" required="" name="product_group_name" value="<?php echo $row['prodgroup_name']; ?>">
                          
                        </div>
                       
                      </div>

                   
                    </div>
                      
                     
        
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <button class="btn btn-danger btn-sm" style="float:left;"><a href="product_group.php">Back</a></button>

                        <button class="btn btn-primary btn-sm" name="submit" type="submit" style="float:left;">Update</button>

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
        <?php include "footer.php"; ?>