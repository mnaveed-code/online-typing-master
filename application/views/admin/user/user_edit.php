<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// if($this->session->userdata('admin')){

// }
// else{
//   redirect(base_url('admin'));
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php $this->load->view('admin/includes/head'); ?>
<style>
  .login_form{
    margin-top: 2%;
    margin-left: 1%;
  }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php $this->load->view('admin/includes/sidebar'); ?>
  <div class="content-wrapper">

   <section class="content" style="background-color:white;">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary login_form">
              <div class="card-header">
                <h3 class="card-title">Edit form:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?php // if(!empty($this->session->flashdata('message'))){ ?>
                     <!-- <label class="text-danger"> -->
                        <script> 
                            // alert("<?= $this->session->flashdata('message') ?>");   
                        </script>
                    </label>
                <?php //} ?>
              <form method="post" action="<?= base_url("user/update")?>">
              <input type="hidden"  value="<?= $users['id'] ?>" name="id">
                        <div class="form-group m-4">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" value="<?= $users['first_name'];?>">
                        </div>
                        <div class="form-group m-4">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="<?= $users['last_name'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="Gmail">Gmail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= $users['gmail'];?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="admin_pas">Enter Password:</label>
                            <input type="text" class="form-control" id="password" name="password"  aria-describedby="emailHelp" placeholder="Enter admin pass" value="<?= $users['password'];?>">
                        </div>
                        <input type="hidden" value="<?= $users['type'];?>" class="form-control" id="type" name="type" style="width: 35px;height: 22px;">
                      
                        <button type="submit" class="btn btn-primary m-4">Update</button> 

              </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->

</div>
<?php $this->load->view('admin/includes/footer'); ?>
<!-- jQuery -->
<?php $this->load->view('admin/includes/jslink'); ?>
</body>
</html>
  