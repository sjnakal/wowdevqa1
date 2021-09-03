<?php include('include/header.php')?>
<?php include "../admin/connect.php"; ?>



<?php
 
// Update prouduct information
if(isset($_POST["submit"])) {
$name=$_POST['name'];
$email=$_POST['email']; 
$mobile=$_POST['mobile'];
$province=$_POST['province'];
$district=$_POST['district'];
$municipality=$_POST['municipal'];
$ward=$_POST['ward_no'];
$tole=$_POST['tole'];



    $update="UPDATE `organization`,`provience`,`district`,`municipality` SET `name`='$name',`email`='$email',`mobile`='$mobile',`provience_name`='$province',`district_name`='$district',`mun_name`='$municipality',`ward_no`='$ward',`tole`='$tole' WHERE organization.fk_province = provience.provience_id AND organization.fk_district = district.district_id AND organization.fk_municipal = municipality.mun_id AND organization.id='".$_SESSION['id']."'";
    $result = mysqli_query($con,$update);
if($result){
echo "<script> location.href='profile.php';</script>";
}
else {
echo "error";
}
}

 ?>
<?php 
$sql = "SELECT * FROM `organization`, `provience`, `district`, `municipality` WHERE organization.fk_province = provience.provience_id AND organization.fk_district = district.district_id AND organization.fk_municipal = municipality.mun_id AND organization.id = '".$_SESSION['id']."'";

$query= mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<div class="right_col" role="main">
         
           
            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="x_panel">
                <div class="container bg-danger">

    <form class="col-md-12 ms-12" method="POST">
              
 
<div class="container ">
 

  <div class="row">
  <div class="col-md-4">
    <label for="name" class="mb-2 mr-sm-2">Name:</label>
        
    <input type="text" class="form-control mb-2 mr-sm-2" id="name"  name="name" value="<?php echo $row['name']; ?>"></div>
    <div class="col-md-4">
    <label for="email" class="mb-2 mr-sm-2">Email:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email"  name="email" value="<?php echo $row['email']; ?>">
    </div>
    </div>

    <div class="row">
  <div class="col-md-4">
    <label for="mobile" class="mb-2 mr-sm-2">Mobile Number:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="mobile"  name="mobile" value="<?php echo $row['mobile']; ?>"></div>
    <div class="col-md-4">
    <label for="province" class="mb-2 mr-sm-2">Province:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="province"  name="province" value="<?php echo $row['provience_name']; ?>">
    </div>
    </div>
    <div class="row">
  <div class="col-md-4">
    <label for="district" class="mb-2 mr-sm-2">District:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="district"  name="district" value="<?php echo $row['district_name']; ?>"></div>
    <div class="col-md-4">
    <label for="municipal" class="mb-2 mr-sm-2">Municipality:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="municipal"  name="municipal" value="<?php echo $row['mun_name']; ?>">
    </div>
    </div>
    <div class="row">
  <div class="col-md-4">
    <label for="ward" class="mb-2 mr-sm-2">Ward No:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="ward" name="ward_no" value="<?php echo $row['ward_no']; ?>"></div>
    <div class="col-md-4">
    <label for="tole" class="mb-2 mr-sm-2">Tole:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="tole" name="tole" value="<?php echo $row['tole']; ?>">
    </div>
    </div>
   
    <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
        
      </label>
    </div>    
    <button type="submit" class="btn btn-primary mb-2" name="submit">Save</button>
    </div>
  </form>
</div>




                </div>
            </div>
        </div>
    </div>


<?php include('include/footer.php');?>