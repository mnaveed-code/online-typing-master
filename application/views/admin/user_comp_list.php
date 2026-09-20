<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User-compition</title>
<?php include 'include/head.php'; ?>
 <style>
  .info-box{
    background-color:#e2b714 !important;
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
            <h1 class="m-0"> Compition</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">compition</a></li>
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
          <?php if($compition == TRUE) {
            foreach($compition as $tests) { ?>
              <div class="col-md-12">
                <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="far fa-heart"></i></span>
                  
                <div class="info-box-content">
                  <span class="info-box-number"><?= $tests['test_title'] ?></span>
                </div>
                <div class="status" style="display:flex;align-item:center;">
                          <a href="<?= base_url('join-compition/').$tests['id'] ?>" style="font-size:28px" class="btn btn-success" title="Start">Join </a>
                 </div>
                 <!-- /.info-box-content -->
                </div>
              </div>
              <?php } } ?>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<?php include 'include/footer.php'; ?>
<?php include 'include/jslink.php'; ?>
</body>
</html>


