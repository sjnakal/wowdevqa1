
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicn.ico" type="image/ico" />
    <title>KRISHI ONLINE SHOP</title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <!-- Ajax fetch script -->
     <!-- link Data Tables -->

    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <!-- End of datatable links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
  
        


             
<div class="right_col" role="main">
          <div class="">
           
            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

        
                     
                     <h2>User Profile</h2>
                   
                    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Sjnakal</h4>
                      <p class="text-secondary mb-1">Buyer</p>
                      <a href="edit_profile.php"><button class="btn btn-primary" >Edit Profile</button></a>
                    </div>
                  </div>
                </div>
              </div>
           </div>
           
           <div class ="table">

           <?php
    include "../admin/connect.php";
    $sno=1;

    $sql = "SELECT organization.name, organization.email, organization.mobile,organization.image,provience.provience_name, district.district_name, municipality.mun_name, add_ward.ward_number, organization.tole FROM organization, provience,district,municipality,add_ward WHERE organization.fk_province = provience_id,.organization.fk_district=district.district_id,organization.fk_municipal=municipality.mun_id,organization.ward_no=add_ward.ward_id ORDER BY organization.name ASC";

    $query= mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
        echo $row['name'];
    }



 ?>
           

           <div class="col-md-4 mb-3">  
           <div class="col-md-8">
              <div class="card mb-4">
                  <div class="row">
                      <th>Name:</th>
                      <td><?php echo $row['name']; ?></td>
                      <hr>
                    </div>
            
                    <div class="row">
                      <th>Email:</th>
                      <td>sjnakal@gmail.com</td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Mobile Number:</th>
                      <td>980000000</td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Province:</th>
                      <td>Lumbini province</td>
                      <hr>
                    </div>
                    <div class="row">
                    <th>District:</th>
                      <td>Banke</td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Municipality:</th>
                      <td>Nepalgunj</td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Word:</th>
                      <td>10</td>
                      <hr>
                    </div>

                    <div class="row">
                      <th>Tole:</th>
                      <td>Dhamboji</td>
                      <hr>
                    </div>

                    </div>
                    </div>
                    </div>
                    </div>



            


</div>
</body>

