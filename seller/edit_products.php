<?php include('include/header.php')?>
<?php 

if (isset($_GET['edit'])) {
    $product_id = $_GET['edit'];
// Update prouduct information
if(isset($_POST["submit"])) {
$prod_name=$_POST['product_name'];
$product_group=$_POST['product_group']; 
$product_des=$_POST['description'];
$product_rate=$_POST['product_rate'];

$unit_type=$_POST['product_unit_price'];

$target_dir = "../assets/images/products/";

$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$wwww ="assets/images/products/".basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$select="SELECT * FROM product_detail, product_group WHERE product_detail.product_group_fk= product_group.prodgroup_id AND product_detail.product_id= '$product_id'";
 $ecexute=mysqli_query($con,$select);
 $selected_category=mysqli_fetch_array($ecexute);

 $update_prod="UPDATE `product_detail` SET `product_name`='$prod_name',`product_group_fk`='$product_group',`product_des`='$product_des',`product_rate`='$product_rate',`unit_type`='$unit_type',`product_image`='$wwww' WHERE product_id ='$product_id'";

	 $run=mysqli_query($con,$update_prod);
	 if($run){
        echo "<script> location.href='products.php';</script>";
	 }else{
	 	echo "error".mysqli_error($con);
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
            <h2>Edit Product Information </h2>
            <?php 
            $sql = "SELECT * FROM product_detail, product_group WHERE product_id ='$product_id' AND product_detail.product_group_fk = product_group.prodgroup_id";
            $result = mysqli_query($con , $sql);
            $rows= mysqli_fetch_array($result);
            ?>
            
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Name</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard" name="product_name" value ="<?php echo $rows['product_name']; ?>">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Group</label>
              <div class="col-md-10">
                <select id="heard" class="form-control " name="product_group" >
                <option value=""><?php echo $rows['prodgroup_name']; ?></option>
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
          </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Description</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard"  name="description" value="<?php echo $rows['product_des'];?>">
              </div>
            </div>
            
        
          
             
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Product Rate</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard"  name="product_rate" value="<?php echo $rows['product_rate'];?>">
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Unit type</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="heard" placeholder="Description" name="product_unit_price" value="<?php echo $rows['unit_type'];?>">
              </div>
            </div>
            
            
        
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <label  class="col-md-2" for="heard">Image</label>
              <div class="col-md-10">
                <input type="file" class="form-control" id="heard" placeholder="Description" name="fileToUpload" value="<?php echo $rows['product_image'];?>">
              </div>
            </div>
         </div>

          <div class="row">
            
            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
              <button class="btn btn-danger btn-md" style="float:right;"><a href="products.php">Back</a></button>
              <button class="btn btn-primary btn-md" name="submit" type="submit" style="float:right;">Save</button>
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
<?php include "include/footer.php"; ?>