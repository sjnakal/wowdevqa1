<?php include('include/header.php')?>





<div class="right_col" role="main">
          <div class="">
           
            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="x_panel">
                <div class="container bg-danger">

                     
           <?php 
    include "../admin/connect.php";

    $sql = "SELECT * FROM organization WHERE organization.id = '".$_SESSION['id']."'";

    $query= mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query)

 ?>
                   
                    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../<?php echo $row['image']; ?>" alt="Admin" class="img-circle" width="100" height="140"> 
                    <div class="mt-3">
                      <h4><?php echo $row['name']; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $row['fk_type_farmer']; ?></p>
                      <a href="edit_profile.php"><button class="btn btn-primary" >Edit Profile</button></a>
                    </div>
                  </div>
                </div>
              </div>
           </div>
           
           

           <?php
    include "../admin/connect.php";

    $sql = "SELECT * FROM `organization`, `provience`, `district`, `municipality` WHERE organization.fk_province = provience.provience_id AND organization.fk_district = district.district_id AND organization.fk_municipal = municipality.mun_id AND organization.id = '".$_SESSION['id']."'";

    $query= mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query)

 ?>
           
           <div class ="table">
           <div class="col-md-4 mb-3">  
           <div class="col-md-8">
              <div class="card mb-4">
                  <div class="row">
                      <th class="">Name:</th>
                      <td class="fw-bold"><?php echo $row['name']; ?></td>
                      <hr>
                    </div>
            
                    <div class="row">
                      <th>Email:</th>
                      <td><?php echo $row['email']; ?></td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Mobile Number:</th>
                      <td><?php echo $row['mobile']; ?></td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Province:</th>
                      <td><?php echo $row['provience_name']; ?></td>
                      <hr>
                    </div>
                    <div class="row">
                    <th>District:</th>
                      <td><?php echo $row['district_name']; ?></td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Municipality:</th>
                      <td><?php echo $row['mun_name']; ?></td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Word:</th>
                      <td><?php echo $row['ward_no']; ?></td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Tole:</th>
                      <td><?php echo $row['tole']; ?></td>
                      <hr>
                    </div>

                    </div>
                    </div>
                    </div>
                    </div>
</div>
<?php include('include/footer.php');?>
