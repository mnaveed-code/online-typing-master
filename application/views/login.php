<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <style>
    input{
      background-color:#2c2e31 !important;
    }
    .btn-primary{
      color: #d1d0c5;
    background-color: #2c2e31;
    border:none;
    }
    .btn-primary:hover{
      color: #323437;
    background-color: #d1d0c5;
    }
  </style>
</head>
<body class="hold-transition login-page" style="background-color: #323437;">
  <div class="login-logo">
    <a href="#" style=" color: #d1d0c5;"><b>Typing</b>master u </a>
  </div>
  <div class="row">
  <!-- /.login-logo -->
  <!-- <div class="row"> -->
    <div class="col-md-6">
        <div class="card">
          <div class="card-body login-card-body" style="background-color: #323437;">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?= base_url("user")?>" method="post">
              <div class="input-group mb-3">
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter user name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <a href="<?= base_url('site/user_register') ;?>" class="btn btn-primary pull-right" style="color:white;float:right;"> <u>Sign up</u> </a> 
                </div>
                <!-- /.col -->
              </div>
            </form>

            
          </div>
          <!-- /.login-card-body -->
        </div>
    </div>   
    <div class="col-md-6">
        <div class="card">
          <div class="card-body login-card-body" style="background-color: #323437;">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?= base_url("user/") ?>" method="post">
              <div class="input-group mb-3">
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter user name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <a href="<?= base_url('site/user_register') ;?>" class="btn btn-primary pull-right" style="color:white;float:right;"> <u>Sign up</u> </a> 
                </div>
                <!-- /.col -->
              </div>
            </form>

            
          </div>
          <!-- /.login-card-body -->
        </div>
    </div>  
  <!-- </div> -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
