<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Message</title>
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
            <h1 class="m-0"> Compition Request</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">request</a></li>
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
         <div class="card">  
            <div class="card-header">
              <h3 class="card-title">Compition Request:</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                    <!-- <a href="<?//= base_url('admin/test/insert')?>" class="btn btn-primary add_new" title="Add ">+Add New </a> -->
                </div>
                
              </div>
            </div>
            <!-- <a href="<?//= base_url('admin/test/insert')?>" class="btn btn-primary add_new" title="Add ">+Add New </a> -->
            <div class="card-body">
                <table class="table table-striped responsive-table">
                    <thead>
                        <tr>
                            <th> User</th>
                            <th> Test title</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($users){ 
                                    foreach($users as $item){ 
                                  ?>  
                        <tr>
                          <td><?= $item['first_name']; ?></td>
                          <td><?= $item['test_title']; ?></td>
                          <?php if($item['request_status'] == 1){ ?>
                          <td> <a href="<?= base_url('approve-comp/').$item['id'] ?>" class="btn btn-success">Approved</a> </td>
                          <?php } elseif($item['request_status'] == 0){ ?>
                            <td> <a href="<?= base_url('approve-comp/').$item['id'] ?>" class="btn btn-success">Pendings</a> </td>
                          <?php } ?>
                        </tr>
                        <?php }}?>
                    </tbody>
              </table>
            </div>
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

  