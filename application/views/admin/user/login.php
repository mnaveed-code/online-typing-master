<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Typing master | Log in</title>

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
    .card-body{
      background-color: #323437 !important;
    }
    body{
    background-color: #323437 !important;
    color: #d1d0c5 !important;
    }
    .content-wrapper{
      background-color: #323437 !important;
    }
  </style>
</head>
<body class="hold-transition login-page" style="background-color: #323437 ;">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style=" color: #d1d0c5;"><b>Typing</b>master </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?= base_url("user/login")?>" method="post">
      
        <div class="input-group mb-3">
          <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter user name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
          <!-- <a href="<?//= base_url('user/register') ;?>" class="btn " > <u>Sign up</u> </a> -->
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.login-card-body -->
  </div>
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
