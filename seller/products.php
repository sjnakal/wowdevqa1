<?php include "../admin/connect.php"; ?>
<?php 
if($type='availability'&& isset($_GET['operation'] ))
{
  $operation=$_GET['operation'];
  $id=$_GET['id'];
   if($operation=='available'){
   $availability='Available';
  }
  else{
   $availability='Unavailable'; }
 $update_availability="UPDATE product_detail set availability='$availability' where product_id='$id'";
  mysqli_query($con,$update_availability);

    }
     

?>
<?php 
 //Delete Operation
if(isset($_GET['del'])){
  $get_id=$_GET['del'];
  $delete_content="DELETE FROM product_detail WHERE product_id=$get_id";
  $run=mysqli_query($con, $delete_content);
  if($run){
    echo "Deleted Successfully";
  }
  header('location:products.php');
}
 ?>
 <?php include "include/header.php"; ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     
                     <h2>Product Lists</h2>
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="add_product.php"><button class="btn btn-primary btn-xs" style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</button></a></li>
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
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      
            <thead>
                        <tr>
                          <th>S.N.</th>
              <th>Product ID</th>
              <th>Name</th>
              <th>group</th>
              <th>Rate</th>
              <th>Unit type</th>
              <th>Reg. Date</th>
              <th>Description</th>
              <th>Image</th>
              <th>Availability</th>
              <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
        include "../admin/connect.php";
        $sno=1;                       
        $select_prod="SELECT product_detail.product_id, product_detail.product_name, product_detail.product_group_fk, product_detail.fk_vendor_id, product_detail.product_rate, product_detail.unit_type, product_detail.product_des, product_detail.product_image, product_detail.product_reg_date, product_group.prodgroup_id,product_group.prodgroup_name,organization.id, organization.name, product_detail.availability FROM product_detail, product_group, organization WHERE product_detail.fk_vendor_id= organization.id AND product_detail.product_group_fk=product_group.prodgroup_id AND product_detail.fk_vendor_id = '$id' ORDER BY product_detail.product_name ASC";
        $prod_result=mysqli_query($con,$select_prod);
        while($prod_row=mysqli_fetch_assoc($prod_result)){  
        ?>
                <tr class="gradeX">
          <td><?php echo $sno;?></td>
          <td><?php echo $prod_row['product_id'];?>
                  <td><?php echo $prod_row['product_name'];?></td>
                  <td><?php echo $prod_row['prodgroup_name'];?></td>
                 
                 
          <td><?php echo $prod_row['product_rate'];?></td>
          <td><?php echo $prod_row['unit_type'];?></td>
          <td><?php echo $prod_row['product_reg_date'];?></td>
          <td><?php echo $prod_row['product_des'];?></td>
          <td><img src="../<?php echo$prod_row['product_image'] ?>" width="100" height="80">
           </td>
           <td>
             <?php if ($prod_row['availability']=='Available')
                                                        { 

                                                          echo "<a href='?type=availability&operation=unavailable&id=".$prod_row['product_id']."' class='btn btn-outline-success btn-rounded'>Available</a>" ;}
                                                        else
                                                            {echo "<a href='?type=availability&operation=available&id=".$prod_row['product_id']."' class='btn btn-outline-warning btn-rounded'>Unavailable</a>";}


                                                          ?></td>
               <td>
                <a href="edit_products.php?edit=<?php echo $prod_row['product_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
      
               <a onclick="return confirm('Are you sure want to Delete?')" href='products.php?del=<?php echo $prod_row['product_id'];?>' class='btn btn-danger btn-xs'><span class='fa fa-trash-o'></span> Delete</a>
              </td>
                </tr>
               
                <?php $sno++;} ?>
                
                         </tbody>
                    </table>
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php include "include/footer.php"; ?>