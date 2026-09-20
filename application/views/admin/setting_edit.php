
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Setting</title>
<?php $this->load->view('admin/include/head.php'); ?>
 
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('admin/include/navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Edit Setting</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
         <div class="col-md-12">
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Edit Seting:</h3>
              </div>
              <form method="post" action="<?= base_url("admin/edit_save")?>" enctype="multipart/form-data">
                      
                        <div class="form-group m-4">
                            <label for="logo">Logo:</label>
                            <input type="text" class="form-control" id="logo" name="logo"  value="<?= $setting_data['logo'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="gmail">Gmail:</label>
                            <input type="text" class="form-control" id="gmail" name="gmail"  value="<?= $setting_data['gmail'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="phon">Phono number:</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no"  value="<?= $setting_data['phone_no'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address"  value="<?= $setting_data['address'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="facebook">Facebook: (Only enter icon class *)</label>
                            <input type="text" class="form-control" id="facebook" name="facebook"  value="<?= $setting_data['facebook'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="tawiter">Tawitter: (Only enter icon class *)</label>
                            <input type="text" class="form-control" id="tawiter" name="tawiter"  value="<?= $setting_data['tawiter'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="instagram">Instagram: (Only enter icon class *)</label>
                            <input type="text" class="form-control" id="instagram" name="instagram"  value="<?= $setting_data['instagram'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="github">Github: (Only enter icon class *)</label>
                            <input type="text" class="form-control" id="github" name="github"  value="<?= $setting_data['github'];?>">
                            
                        </div>
                       
                        <button type="submit" class="btn btn-primary m-4">Submit</button> 
              </form>
            </div>
         </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<?php $this->load->view('admin/include/footer.php'); ?>
<?php $this->load->view('admin/include/jslink.php'); ?>
</body>
</html>


  