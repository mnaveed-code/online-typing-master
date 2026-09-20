<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Setting</title>
<?php include 'include/head.php'; ?>
 
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'include/navbar.php'; ?>
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
              <li class="breadcrumb-item"><a href="#">Setting</a></li>
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
              <h3 class="card-title">Setting :</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped responsive-table">
                  <thead>
                      <tr>
                          <th> Logo</th>
                          <th>Gmail</th>
                          <th> Address</th>
                          <th>Phone no</th>
                          <th>Edit</th>
                          <th>Facebook</th>
                          <th>Tawitter</th>
                          <th>Instagram</th>
                          <th>Github</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php if($setting){ 
                            foreach($setting as $item){ 
                  ?>  
                      <tr>
                        
                        <td><?= $item['logo'] ?></td>
                        <td><?= $item['phone_no'] ?></td>
                        <td><?= $item['address'] ?></td>
                        <td><?= $item['gmail'] ?></td>
                        <td><?= $item['facebook'] ?></td>
                        <td><?= $item['tawiter'] ?></td>
                        <td><?= $item['instagram'] ?></td>
                        <td><?= $item['github'] ?></td>
                        <td><a href="<?= base_url('admin/setting_edit/').$item['id'] ?>" class="btn btn-success" title="Edit"><i class="nav-icon fas fa-edit"></i></a></td>
                      </tr>
                      <?php } 
                      } ?>
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
<?php include 'include/footer.php'; ?>
<?php include 'include/jslink.php'; ?>
</body>
</html>
