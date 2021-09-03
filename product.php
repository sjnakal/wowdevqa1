<?php
 include('includes/header.php'); 
?>

<?php 
if (isset($_GET['cat'])) {
$subcatId = $_GET['cat'];
?>

<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Available Products</h2>
                    </div>
                    <div class="featured__controls">
                        
                    </div>
                </div>
            </div>
            <div class="row featured__filter"> 
            <?php include "admin/connect.php";
                        $sql = "SELECT `product_id`, `product_name`, `product_group_fk`, `product_des`, `product_rate`, `unit_type`, `product_image`, `fk_vendor_id`, `product_reg_date` FROM `product_detail` WHERE `product_group_fk` ='$subcatId' ";
                            $run = mysqli_query($con,$sql);
                           while ($rows = mysqli_fetch_assoc($run)) {
                           
                           ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $rows['product_image']; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product_details.php?detail=<?php echo $rows['product_id'];?>"><?php echo $rows['product_name']; ?></a></h6>
                            <h5><?php echo " Rs.  " .$rows['product_rate']; ?></h5>
                        </div>
                    </div>
                </div>
                           <?php } ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <?php } ?>
<?php
 include('includes/footer.php'); 
?>
