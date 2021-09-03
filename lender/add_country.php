
<?php include "header.php"; ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    
    <div class="clearfix"></div>
    <!-- Start of add country form row -->
    <div class="row">
      
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            
            <h2 style="color:red">
            
            </h2>
            
            <h2>Add Country</h2>
            
            <ul class="nav navbar-right panel_toolbox">
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
    <form class="form-horizontal form-label-left input_mask" method="post" action="insert_country.php" enctype="multipart/form-data">
      
      <div class="row">
        
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          <label  class="col-md-1" for="heard">Country Name</label>
          <div class="col-md-11">
            
            <input type="text" class="form-control" id="heard" placeholder="Enter Country name" name="name" required="">
          </div>
        </div>
        
        <div class="col-md-3">
          <input type="button" class="btn btn-primary btn-md" value="Go back!" style="float:left;" onclick="history.back()">
          <button class="btn btn-primary btn-md" name="submit" type="submit"  style="float:left;">Submit</button>
           
        </div>
        
      </div>
    </form>
    
  </div>
</div>
</div>
</div>
<!-- end of add Country Form Row -->

</div>
</div>
<!-- /page content -->
<?php include "footer.php"; ?>