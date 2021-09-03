<?php include('include/header.php');?>

<?php 
include('../admin/connect.php');

if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['id'])){ 
  $username = $_SESSION['username'];
  $id= $_SESSION['id'];
  $email = $_SESSION['email']; 
$sql = "SELECT * FROM `organization` WHERE id ='$id'";
$result = mysqli_query($con , $sql);
$fetch = mysqli_fetch_array($result);

}
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                          <i class="fa fa-globe"></i> Invoice.
                                          <small class="pull-right">Date:<?php echo date("jS \of F Y ") ?>

                                          </small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                            <?php
                          
                          $sql = "SELECT * FROM `organization`,`municipality` WHERE organization.fk_municipal=municipality.mun_id AND id ='$id'";
                          $result = mysqli_query($con , $sql);
                        $row = mysqli_fetch_array($result);
                        ?>
                                          <strong><?php echo $_SESSION['username']; ?></strong>
                                          <br>Email: <?php echo $_SESSION['email']; ?>
                                          <br>Phone: <?php echo $row['mobile'] ; ?>
                                          <br>Address:<?php echo $row['mun_name']; ?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                            <?php
                          include "../admin/connect.php";

                      
$select_prod=" SELECT DISTINCT * FROM organization, product_detail, cart, orders,`district`,`municipality` WHERE organization.id = cart.customer_id AND organization.id = orders.customer_id AND product_detail.product_id = cart.product_id AND product_detail.fk_vendor_id = '".$_SESSION['id']."' AND organization.fk_district = district.district_id AND organization.fk_municipal = municipality.mun_id ORDER BY orders.odered_date ASC";
$prod_result=mysqli_query($con,$select_prod);
$prod_row=mysqli_fetch_assoc($prod_result);
?>
                                          <strong><?php echo $prod_row['name'];?></strong>
                                          <br>Email:<?php echo $prod_row['email'];?>
                                          <br>Phone:<?php echo $prod_row['mobile'];?>
                                          <br>Address:<?php echo $prod_row['mun_name'];?> 

                                
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice #007612</b>
                          <br>
                          <br>
                          <b>Order ID:</b><?php echo $prod_row['order_id'];?>
                          
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th style="width: 59%">Description</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><?php echo $prod_row['product_name'];?></td>
                                <td><?php echo $prod_row['product_rate'];?></td>
                                <td><?php echo $prod_row['product_des'];?>
                                </td>
                                <td>$64.50</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead">Amount Due 2/22/2014</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$250.30</td>
                                </tr>
                                <tr>
                                  <th>Tax (9.3%)</th>
                                  <td>$10.34</td>
                                </tr>
                                <tr>
                                  <th>Shipping:</th>
                                  <td>$5.80</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$265.24</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>