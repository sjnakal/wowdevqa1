<?php include ('connect.php'); ?>
<?php 
if($type='status'&& isset($_GET['operation'] ))
{
  $operation=$_GET['operation'];
  $id=$_GET['id'];
   if($operation=='approval'){
   $status='Approval';
  }
  else{
   $status='Unapproval'; }
 $update_status="UPDATE product_detail set status='$status' where product_id='$id'";
  mysqli_query($con,$update_status);

    }
     

?>
<?php 
 //Delete Operation
if(isset($_GET['del'])){
  $get_id=$_GET['del'];
  $delete_content="DELETE FROM borrowers WHERE borrower=$get_id";
  $run=mysqli_query($con, $delete_content);
  if($run){
    echo "Deleted Successfully";
  }
  header('location:list_borrower.php');
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
                     
                     <h2>Borrowers List</h2>
                   
                    <ul class="nav navbar-right panel_toolbox">
                    
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
              <th>Borrower ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>City</th>
              <th>State</th>
              <th>Country</th>
              <th>Occupation</th>
              <th>Pan No</th>
              <th>Email</th>
              <th>Mobile No</th>
              <th>Babk A/C</th>
              <th>DOB</th>
              <th>Username</th>
              <th>Password</th>
              <th>Telephone</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>






                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
        include "connect.php";
        $sno=1;                       
        $displayquery = "SELECT * FROM borrowers";
        $querydisplay = mysqli_query($con,$displayquery);
       // $row = mysqli_num_rows($querydisplay);
        while($result = mysqli_fetch_array($querydisplay)){  
        ?>
                <tr class="gradeX">
          <td><?php echo $sno;?></td>
          <td><?php echo $result['borrower_id'];?></td>
          <td><?php echo $result['name'];?></td>
          <td><?php echo $result['address'];?></td>
                 
                 
          <td><?php echo $result['city'];?></td>
          <td><?php echo $result['state'];?></td>
          <td><?php echo $result['country'];?></td>
          <td><?php echo $result['occupation'];?></td>
          <td><?php echo $result['pan_no'];?></td>
          <td><?php echo $result['email'];?></td>
          <td><?php echo $result['mobile_no'];?></td>
          <td><?php echo $result['account_no'];?></td>
          <td><?php echo $result['dob'];?></td>
          <td><?php echo $result['user_name'];?></td>
          <td><?php echo $result['password'];?></td>
          <td><?php echo $result['telephone'];?></td>

          <td><img src="../images<?php echo $result['image']; ?>" width="100px" height="80px">
           </td>
           <td>
             <?php if ($result['approval']=='Approval')
                                                        { 

                                                          echo "<a href='?type=staatus&operation=unapproval&id=".$result['borrower_id']."' class='btn btn-outline-success btn-rounded'>Approval</a>" ;}
                                                        else
                                                            {echo "<a href='?type=approval&operation=approval&id=".$result['borrower_id']."' class='btn btn-outline-warning btn-rounded'>Unapproval</a>";}


                                                          ?></td>
               <td>
                <a href="edit_borrower.php?edit=<?php echo $result['borrower_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
      
               <a onclick="return confirm('Are you sure want to Delete?')" href='borrowers.php?del=<?php echo $result['borrower_id'];?>' class='btn btn-danger btn-xs'><span class='fa fa-trash-o'></span> Delete</a>
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