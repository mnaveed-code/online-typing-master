
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
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
            <h1 class="m-0"> Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Profle Edit</a></li>
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
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insert Test:</h3>
              </div>
              <form method="post" action="<?= base_url("user/register")?>">
                <input type="hidden"  value="<?= $users['id'] ?>" name="id">
                        <div class="form-group m-4">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Test title" value="<?= $users['first_name']; ?>">
                           
                        </div>
                        <div class="form-group m-4">
                            <label for="last_name">Last name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Paragrapgh" value="<?= $users['last_name']; ?>">
                          
                        </div>
                        <div class="form-group m-4">
                            <label for="Email">User email:</label>         
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Total time" value="<?= $users['gmail']; ?>">
                            
                        </div>
                        <div class="form-group m-4">
                            <label for="password">Password:</label>         
                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Total time" value="<?= $users['password']; ?>">
                            
                        </div>
                        <button type="submit" class="btn btn-primary m-4">Submit</button> 
              </form>
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
