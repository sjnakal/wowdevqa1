<?php include('include/header.php');?>

<div class="right_col" role="main">
          <div class="">
           
            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     
                     <h2>Requested Products</h2>
                   
                    
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      
            <thead>
                        <tr>
                          <th>S.N.</th>
              <th>Product Name</th>
              <th>Product Image</th>
              <th>Quantity</th>
              <th>Total price</th>
              <th>Buyer Name</th>
              <th>Buyer's District</th>
              <th>Municipality</th>
              <th>Ward No.</th>
              <th>Tole</th>
              <th>Payment</th>
              <th>Order Date</th>
              <th>Status</th>
              
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
        include "../admin/connect.php";

        $sno=1;                       
        $select_prod=" SELECT DISTINCT * FROM organization, product_detail, cart, orders,`district`,`municipality` WHERE organization.id = cart.customer_id AND organization.id = orders.customer_id AND product_detail.product_id = cart.product_id AND product_detail.fk_vendor_id = '".$_SESSION['id']."' AND organization.fk_district = district.district_id AND organization.fk_municipal = municipality.mun_id ORDER BY orders.odered_date ASC";
        $prod_result=mysqli_query($con,$select_prod);
        while($prod_row=mysqli_fetch_assoc($prod_result)) {
        ?>
                <tr class="gradeX">
          <td><?php echo $sno;?></td>
          <td><?php echo $prod_row['product_name'];?>
          <td><img src="../<?php echo$prod_row['product_image'] ?>" width="100" height="80">
           </td>
         

          <td><?php echo $prod_row['quantity'] . $prod_row['unit_type'];?></td>
          <td><?php echo $prod_row['quantity']*$prod_row['product_rate'];?></td>
                 
                 
          
          <td><?php echo $prod_row['name'];?></td>
          <td><?php echo $prod_row['district_name'];?></td>
          <td><?php echo $prod_row['mun_name'];?></td>
          <td><?php echo $prod_row['ward_no'];?></td>
          <td><?php echo $prod_row['tole'];?></td>
          <td><?php echo $prod_row['payment'];?></td>
          <td><?php echo $prod_row['odered_date'];?></td>
           <td>
             
<a href="invoice.php?product_id=<?php echo $prod_row['product_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Save Bill </a>

<a href='soldproduct.php?data=<?php echo $prod_row['order_no'];?>' class='btn btn-danger btn-xs'><span class='fa fa-trash-o'></span> Approve</a>
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

<?php include('include/footer.php');?>
