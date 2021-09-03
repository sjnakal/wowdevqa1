<?php 
//Delete Operation
if(isset($_GET['del'])){
include "connect.php";
$city_id=$_GET['del'];
$delete_content="DELETE FROM product_group WHERE prodgroup_id=$city_id";
$run=mysqli_query($con, $delete_content);
if($run){
echo "Deleted Successfully";
}
header('location:product_group.php');
} ?>
<?php include "header.php"; ?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     
                     <h2>Product Group</h2>
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="add_product_group.php"><button class="btn btn-primary btn-xs" style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i>Add new group</button></a></li>
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
                          <th>S.N</th>
              <th>Product Group Name</th> 
              <th>Category Name</th>                        
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          include "connect.php";
                          $sno=1;
                          $select_country="SELECT product_group.prodgroup_id, product_group.prodgroup_name, product_group.fk_category, category.cat_id, category.cat_name FROM product_group, category WHERE product_group.fk_category = category.cat_id ORDER BY prodgroup_name ASC";
              $city_result=mysqli_query($con,$select_country);
              while($row=mysqli_fetch_assoc($city_result)){
                          
                        ?>
                        <tr>
              <td><?php echo $sno;?></td>
                          <td><?php echo $row['prodgroup_name'];?></td>
                          <td><?php echo $row['cat_name'];?></td>
                          <td>
                            <!--moodel-->
                            
                            <!--moodel-->
                            <a href="edit_product_group.php?edit=<?php echo $row['prodgroup_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a onclick="return confirm('Are you sure want to Delete!')" href="product_group.php?del=<?php echo $row['prodgroup_id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

                          </td>
                          
                        </tr>
            <?php $sno++; ?>
                        <?php }?>
                         </tbody>
                    </table>
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


<?php include "footer.php"; ?>