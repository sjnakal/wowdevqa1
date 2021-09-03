 <!-- Hero Section Begin -->
 <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories " style="font-family: 'Roboto', sans-serif;">
                        <div class="hero__categories__all">
                            
                            <span>All departments</span>
                        </div>
                        <ul>
                            <?php 
                            include "admin/connect.php";
                            $sql = "SELECT `prodgroup_id`, `prodgroup_name`, `fk_category` FROM `product_group` ORDER BY `prodgroup_name` ASC";
                            $run = mysqli_query($con,$sql);
                            while ($rows = mysqli_fetch_array($run)) { ?>
                                <li><a href="product.php?cat=<?php echo $rows['prodgroup_id']; ?>"><?php echo $rows['prodgroup_name'] ;?></a></li>
                                   <?php } ?>                     
                             
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="">
                        <div class="hero__search__form">
                            <form action="shop-grid.php" method="GET">
                            
                        <select name="di" >
                        <?php 
                            include "admin/connect.php"; 
                            $sql1 = "SELECT * FROM district ORDER BY district_name ASC";
                            $run1 = mysqli_query($con,$sql1);
                             
                         while ($rows1 = mysqli_fetch_array($run1)) { ?> 

                            <option  value="<?php echo $rows1['district_id']; ?>">
                            <a href="shop-grid.php?locat=<?php echo $rows1['district_id']; ?>">

                            <?php echo $rows1['district_name'] ;?>

                            </option>
                            <?php }?>
                        </select>
                       
                        <input type="text" name = "ladot" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                    </div>
                                
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>98000000000</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
               
                        <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br/>100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
    </section> 
    <!-- Hero Section End -->