<?php 
if (isset($_GET[''])) {
$subcatId = $_GET[''];
                          
 ?>
 <?php
 include('includes/header.php'); 
 
 include('includes/hero.php');
?>

   

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                	<?php include "admin/connect.php";
                        $sql = "SELECT `product_id`, `product_name`, `product_group`, `product_des`, `product_rate`, `unit_type`, `product_image`, `fk_vendor_id`, `product_reg_date` FROM `product_detail` WHERE `product_group` ='$subcatId' ";
                            $run = mysqli_query($con,$sql);
                           while ($rows = mysqli_fetch_assoc($run)) {
                           
                           ?>

                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo $rows['product_image']; ?>">
                            <h5><a href="product_details.php?detail=<?php echo $rows['product_id'];?>"><?php echo $rows['product_name']; ?></a></h5>
                        </div>
                    </div>
                 
                    <?php } // yo whoile ko end ho  ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

   
<?php } ?> <!-- yo if isset ko ens bracket ho -->


<?php include('includes/footer.php');?>