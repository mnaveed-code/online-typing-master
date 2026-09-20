<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
<?php $this->load->view('admin/include/head') ?>
 <style>
  body{
    background-color: #323437 !important;
    color: #d1d0c5 !important;
  }
  .content-wrapper{
    background-color: #323437 !important;
  }
  .card-body{
      background-color: #323437 !important;
    }
    input{
      background-color:#2c2e31 !important;
    }
 </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('navbar'); ?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Dashboard <small> </small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>

    <div class="content">
      <div class="container">
      <?php if($this->session->flashdata('user_register')) {?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('user_register'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <?php } ?>
      <?php if($this->session->flashdata('login')) {?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('login'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <?php } ?>

       <!-- <?php 

          // $data = array(
                  // 4  => 'http://example.com/news/article/2006/06/03/',
          // );

          // echo $this->calendar->generate(2022,4,$data);
      ?> -->
        <div class="row">
          <div class="col-md-4">
              <div class="card">
                <div class="card-body login-card-body" style="background-color: #323437;">
                  <h3 class="login-box-msg">Register your self</h3>
                  <form action="<?= base_url('site/user_register') ;?>" method="post">
                    <div class="input-group mb-3">
                      <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter first name" >
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter last name" REQUIRED>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="email" id="gmail" name="email" class="form-control" placeholder="Enter gmail" required>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" REQUIRED>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="type" value="user">
                    <div class="row">
                      <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                      </div>
                    
                    </div>
                  </form>
                </div>
              </div>
          </div>
          <div class="col-md-4">

          </div>   
          <div class="col-md-4">
              <div class="card">
                <div class="card-body login-card-body" style="background-color: #323437;">
                  <h3 class="login-box-msg">Login your self</h3>

                  <form action="<?= base_url("user") ?>" method="post">
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
                      
                    </div>
                  </form>

                  
                </div>
                <!-- /.login-card-body -->
              </div>
              </div>  
          </div>
      </div>
    </div>

    
  </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
 <?php $this->load->view('admin/include/footer') ?>
</div>
<?php $this->load->view('admin/include/jslink') ?>
</body>
</html>