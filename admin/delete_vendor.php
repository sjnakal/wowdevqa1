<?php 	


include "connect.php";
  $prod_cat_id=$_GET['del'];
  $delete_content="DELETE FROM organization WHERE id=$prod_cat_id";
  $run=mysqli_query($con, $delete_content);
  if($run){
    echo "Deleted Successfully";
  }
  header('location:vendor.php');
 ?>