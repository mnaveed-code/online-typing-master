<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php $this->load->view('admin/includes/head'); ?>
<style>
  .login_form{
    margin-top: 9%;
    margin-left: 20%;
  }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <div class="content-wrapper">

   <section class="content" style="background-color:white;">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary login_form">
              <div class="card-header">
                <h3 class="card-title">Please Register yourself:</h3>
              </div>
              <form method="post" action="<?= base_url("user/register")?>">
                        <div class="form-group m-4">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="Gmail">Gmail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="admin_pas">Enter Password:</label>
                            <input type="text" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="Enter admin pass">
                        </div>
                        <input type="hidden" value="admin" name="type">
                        <!-- <div class="form-group m-4">
                            <label for="type">Type:</label><br>
                            <input type="radio" class="form-control" id="type" name="type" style="width: 100px;height: 22px;" value="admin" > Admin
                            <input type="radio" class="form-control" id="type" name="type" style="width: 100px;height: 22px;" value="user" required> User
                        </div> -->
                      
                        <button type="submit" class="btn btn-primary m-4">Register</button> 

              </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->

</div>
<?php //$this->load->view('admin/includes/footer'); ?>
<!-- jQuery -->
<?php $this->load->view('admin/includes/jslink'); ?>
</body>
</html>
  