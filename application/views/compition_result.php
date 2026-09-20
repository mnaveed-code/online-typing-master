
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Compition</title>
<?php $this->load->view('admin/include/head.php'); ?>
 
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Compition result</a></li>
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
              <h3 class="card-title">All Compition :</h3>
              <div class="card-tools">
               
                
              </div>
            </div>
            <div class="card-body">
                <table class="table table-striped responsive-table">
                    <thead>
                        <tr>
                            <th> User</th>
                            <th> Test title</th>
                            <th> Total character</th>
                            <th> correct </th>
                            <th>Wrong</th>
                            <th>Time</th>
                            <th>Acurcy</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($result){ 
                                    foreach($result as $item){ 
                                  ?>  
                        <tr>
                          <td><?= $item['first_name']; ?></td>
                          <td><?= $item['test_title']; ?></td>
                          <td><?= $item['total_charachter']; ?></td>
                          <td><?= $item['correct_character']; ?></td>
                          <td><?= $item['wrong_character']; ?></td>
                          <td><?= $item['finsh_time']; ?>sec</td>
                          <td><?= $item['acuracy']; ?></td>
                          <td><?= $item['status']; ?></td>
                          <td><a href="<?= base_url('show-comp-grapgh/').$item['id'] ?>" class="btn btn-success" title="Show"><i class="nav-icon fas fa-eye"></i></a></td>
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

  