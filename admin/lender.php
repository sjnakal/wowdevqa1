<?php 
 //Delete Operation
if(isset($_GET['del'])){
  include "connect.php";
  $get_id=$_GET['del'];
  $delete_content="DELETE FROM organization WHERE user_id=$get_id";
  $run=mysqli_query($con, $delete_content);
  if($run){
    echo "Deleted Successfully";
  }
  header('location:lender.php');
}
 ?>
 <?php include "header.php"; ?>
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
              <th>Bank ID</th>
              <th>Bank Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Phone</th>
              <th>Username</th>
              <th>Password</th>
              <th>Account No.</th>
              <th>Pan No.</th>
              <th>Country</th>
              <th>Province</th>
              <th>District</th>
              <th>Municipality</th>
              <th>Ward</th>
              <th>Zip Code</th>
              <th>Tole Name</th>
              <th>Reg. Date</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
        include "connect.php";
        $sno=1;                       
        // $select_lender="SELECT `user_id`, `email`, `mobile`, `phone`, `username`, `password`, `bank_name`, `account_no`, `pan_no`, `country`, `province`, `district`, `municipality`, `word`, `zip_code`, `tole`, `image`, `status`, `reg_date` FROM `organization` ORDER BY organization ASC";
        // $lender_result=mysqli_query($con,$select_lender);
        // while($lender_row=mysqli_fetch_array($lender_result)){ 
            $displayquery = "SELECT * FROM organization";
           $querydisplay = mysqli_query($con,$displayquery);
          while($lender_row = mysqli_fetch_array($querydisplay)){  
        ?>
                <tr class="gradeX">
                  <td><?php echo $sno;?></td>
                  <td><?php echo $lender_row['user_id'];?></td>
                  <td><?php echo $lender_row['bank_name'];?></td>
                  <td><?php echo $lender_row['email'];?></td>
                  <td><?php echo $lender_row['mobile'];?></td> 
                  <td><?php echo $lender_row['phone'];?></td>
                  <td><?php echo $lender_row['username'];?></td>
                  <td><?php echo $lender_row['password'];?></td>
                  <td><?php echo $lender_row['account_no'];?></td>
                  <td><?php echo $lender_row['pan_no'];?></td>
                  <td><?php echo $lender_row['country'];?></td>
                  <td><?php echo $lender_row['province'];?></td>
                  <td><?php echo $lender_row['district'];?></td>
                  <td><?php echo $lender_row['municipality'];?></td>
                  <td><?php echo $lender_row['word'];?></td>
                  <td><?php echo $lender_row['zip_code'];?></td>
                  <td><?php echo $lender_row['tole'];?></td>
                  <td><?php echo $lender_row['reg_date'];?></td>

                 <td><img src="../<?php echo$lender_row['image'] ?>" width="100" height="80">
                  </td>
                  <td><?php echo $lender_row['status'];?></td>

          
               <td>
                <a href="edit_lender.php?edit=<?php echo $lender_row['user_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
      
               <a onclick="return confirm('Are you sure want to Delete?')" href='lender.php?del=<?php echo $lender_row['user_id'];?>' class='btn btn-danger btn-xs'><span class='fa fa-trash-o'></span> Delete</a>
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
        <?php include "footer.php"; ?>