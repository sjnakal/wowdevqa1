<?php
//Delete Operation
if(isset($_GET['del'])){
include "connect.php";
$city_id=$_GET['del'];
$delete_content="DELETE FROM add_ward WHERE ward_id=$city_id";
$run=mysqli_query($con, $delete_content);
if($run){
echo "Deleted Successfully";
}
header('location:ward.php');
}
?>
<?php include "header.php" ;?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     
                     <h2>Ward No. Lists</h2>
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="add_ward.php"><button class="btn btn-primary btn-xs" style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i> Add Ward</button></a></li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <!--<li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>-->
                        </ul>
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
<th>S.N</th>
<th>Ward </th>
<th>Local Level </th>
<th>Province </th>
<th>Country </th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
include "connect.php";
 $sno=1;
$select_city="SELECT add_ward.ward_id,add_ward.ward_number,municipality.mun_name,district.district_name,provience.provience_name,country.country_name FROM add_ward,municipality,district,provience,country WHERE add_ward.fk_mun_id = municipality.mun_id AND municipality.fk_district_id = district.district_id AND district.fk_peovince_id = provience.provience_id AND provience.fk_country_id = country.country_id GROUP by add_ward.ward_id ORDER BY add_ward.ward_number ASC ";
$result=mysqli_query($con,$select_city);
while ($row=mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $sno;?></td>
<td><?php echo $row['ward_number'];?></td>
<td><?php echo $row['mun_name'];?></td>
<td><?php echo $row['provience_name']; ?></td>
<td><?php echo $row['country_name']; ?></td>
<td>
<!--moodel-->

<!--moodel-->
<a href="edit_ward.php?edit=<?php echo $row['ward_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
<a onclick="return confirm('Are you sure want to Delete!')" href="ward.php?del=<?php echo $row['ward_id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
</td>

</tr>
<?php $sno++; ?>
<?php } ?>
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