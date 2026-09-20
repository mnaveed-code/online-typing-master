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
            <h1 class="m-0"> All Test</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">All test</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <?php  if(!empty($this->session->flashdata('test_delete'))){ ?>
         <div class="alert alert-danger m-2 alert-dismissible fade show" role="alert">
             <?= $this->session->flashdata('test_delete') ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
         </div>
    <?php } ?>
    <?php  if(!empty($this->session->flashdata('test_update'))){ ?>
         <div class="alert alert-success m-2 alert-dismissible fade show" role="alert">
             <?= $this->session->flashdata('test_update') ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
         </div>
    <?php } ?>
    <?php  if(!empty($this->session->flashdata('test_insert'))){ ?>
         <div class="alert alert-success m-2 alert-dismissible fade show" role="alert">
             <?= $this->session->flashdata('test_insert') ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
         </div>
    <?php } ?>
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
         <div class="col-md-12">
         <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Test :</h3>
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
                            <th> Id</th>
                            <th style="width:115px;"> Test Title</th>
                            <th> Test Paragrapgh</th>
                            <th style="width:120px;"> Total time</th>
                            <th>Type</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($tests){ 
                              foreach($tests as $item){ 
                      ?>  
                        <tr>
                          <td><?= $item['id'] ?></td>
                          <td><?= $item['test_title'] ?></td>
                          <td><?= $item['test_paragraph'] ?></td>
                          <td><?= $item['total_time'] ?></td>
                          <td><?= $item['test_type'] ?></td>
                          <td><a href="<?= base_url('admin/test/edit/').$item['id'] ?>" class="btn btn-success" title="Edit"><i class="nav-icon fas fa-edit"></i></a></td>
                          <td><a href="<?= base_url('admin/test/delete/').$item['id'] ?>" class="btn btn-danger" title="Delete"><i class="nav-icon fas fa-trash"></i></a></td>
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
