<?php
 include('includes/header.php');
?>
<?php
if (isset($_GET['detail'])) {
$subcatId = $_GET['detail'];

 ?>

    <!-- Categories Section Begin -->
    <section class="Details">
        <div class="container mb-5">
         <div class="row">
          <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                	<?php include "admin/connect.php";
                        $sql = "SELECT `product_id`, `product_name`, `product_group_fk`, `product_des`, `product_rate`, `unit_type`, `product_image`, `fk_vendor_id`, `product_reg_date` FROM `product_detail` WHERE `product_id` ='$subcatId' ";
                            $run = mysqli_query($con,$sql);
                           while ($rows = mysqli_fetch_assoc($run)) {

                           ?>

                    <div class="">
                        <div class="categories__item set-bg" data-setbg="<?php echo $rows['product_image']; ?>">

                       </div>
                    </div>
            <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Roboto', sans-serif;"><?php echo $rows['product_name']; ?></h5>
                    <p class="card-text" style="font-family: 'Roboto', sans-serif;"><?php echo $rows['product_des']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item" style="font-family: 'Roboto', sans-serif;"><?php echo "Product Rate =  Rs ". $rows['product_rate'];?></li>
                      <li class="list-group-item" style="font-family: 'Roboto', sans-serif;"><?php echo "Unit type  :  " .  $rows['unit_type']; ?></li>
                   </ul>
                   <a href="buyer/login_form.php" class="btn btn-primary" style="font-family: 'Roboto', sans-serif;">Contact supplier</a>
            </div>
                     <?php } // yo whoile ko end ho  ?>

            </div>
            <!-- another card for location information -->
        <div class="col-md-6">
         <div class="card">
         <?php include "admin/connect.php";
           
          $result = "SELECT organization.id, organization.name, organization.email, organization.mobile, organization.fk_type_farmer, organization.fk_district, organization.fk_municipal, organization.ward_no, organization.tole,district.district_id, district.district_name, municipality.mun_id, municipality.mun_name, product_detail.product_id, product_detail.fk_vendor_id FROM organization, district, municipality, product_detail WHERE organization.id = product_detail.fk_vendor_id AND organization.fk_district = district.district_id AND organization.fk_municipal = municipality.mun_id AND
             product_detail.product_id ='$subcatId' ";
            //echo $result;
            $run1 = mysqli_query($con, $result); 
          while ($rows1 = mysqli_fetch_assoc($run1)) {
         ?>
         
     <h5 class="card-header text-center p-3 mb-2 bg-info text-white"><i class="fa fa-user-circle-o" aria-hidden="true"></i>  <?php echo $rows1['name'];?></h5>
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-map-marker" aria-hidden="true"></i>
<?php echo $rows1['tole'];?>, <?php echo $rows1['ward_no'];?>,<?php echo $rows1['mun_name'];?>, <?php echo $rows1['district_name'];?></h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">View complete details</a>
  </div>
</div>

          <?php }?><!-- yo whoile ko end ho -->

        </div>
        </div>
        </div>
    </section>
    <!-- Categories Section End -->


<?php } ?> <!-- yo i f isset ko ens bracket ho -->


<?php include('includes/footer.php');?>