<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Message</title>
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
            <h1 class="m-0"> Message</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Message</a></li>
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
              <h3 class="card-title">All Mesage :</h3>
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
                            <th> Name</th>
                            <th> Gmail</th>
                            <th> Message</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($message){ 
                              foreach($message as $item){ 
                      ?>  
                        <tr>
                          <td><?= $item['name'] ?></td>
                          <td><?= $item['email'] ?></td>
                          <td><?= $item['message'] ?></td>
                          <!-- <td><a href="<?//= base_url('admin/test/edit/').$item['id'] ?>" class="btn btn-success" title="Edit"><i class="nav-icon fas fa-edit"></i></a></td>
                          <td><a href="<?//= base_url('admin/test/delete/').$item['id'] ?>" class="btn btn-danger" title="Delete"><i class="nav-icon fas fa-trash"></i></a></td> -->
                        </tr>
                        <?php } 
                          } ?>
                    </tbody>
              </table>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
          </div>
        </div>
          <!-- /.col-md-6 -->
        </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
 <?php include 'include/footer.php'; ?>
</div>
<?php include 'include/jslink.php'; ?>
</body>
</html>
