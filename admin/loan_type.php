<?php

//Delete Operation
if(isset($_GET['del'])){
include "connect.php";
$coun_id=$_GET['del'];
$delete_content = "DELETE FROM `loan_type` WHERE loantype_id=$coun_id";
$run=mysqli_query($con, $delete_content);
if($run){
echo "Deleted Successfully";
}
header('location:loan_type.php');
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
                     
                     <h2>Loan Type</h2>
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="add_loan_type.php"><button class="btn btn-primary btn-xs" style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i> Add Loan Type</button></a></li>
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
              <th>Loan Name</th>                         
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          include "connect.php";
                          $sno=1;
                          $select_loan_type="SELECT `loantype_id`, `loan_name` FROM `loan_type` order by loan_name ASC";
                          
              $loan_result=mysqli_query($con,$select_loan_type);
              while($row=mysqli_fetch_assoc($loan_result)){
                          
                        ?>
                        <tr>
              <td><?php echo $sno;?></td>
                          <td><?php echo $row['loan_name'];?></td>
                          <td>
                            <!--moodel-->
                            
                            <!--moodel-->
                            <a href="edit_loan_type.php?edit=<?php echo $row['loantype_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a onclick="return confirm('Are you sure want to Delete!')" href="loan_type.php?del=<?php echo $row['loantype_id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

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