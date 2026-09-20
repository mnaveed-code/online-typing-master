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
            <h1 class="m-0"> Inert Test</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Insert test</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
         <div class="col-md-12">
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insert Test:</h3>
              </div>
               <form method="post" action="<?= base_url("admin/test/insert")?>">
                        <div class="form-group m-4">
                            <label for="test_title">Test title:</label>
                            <input type="text" class="form-control" id="test_title" name="test_title" placeholder="Enter Test title">
  
                        </div>
                        <div class="form-group m-4">
                            <label for="test_paragraph">Test Paragraph:</label>
                            <input type="text" class="form-control" id="test_paragraph" name="test_paragraph" placeholder="Enter Paragrapgh">
                          
                        </div>
                        <div class="form-group m-4">
                            <label for="total_time">Total Time:</label>         
                            <input type="text" class="form-control" id="total_time" name="total_time" placeholder="Enter Total time">
                            
                        </div>
                        <div class="form-group m-4" style="display:flex">
                          <label for="type" style="margin-right:15px">Type:</label> <br>
                            <span>Practise</span><input type="radio" class="form-control" id="type" name="type" value="p" style="width: 30px;height: 22px;">
                            <span>Test</span><input type="radio" class="form-control" id="type" name="type" value="test" style="width: 30px;height: 22px;">
                            <span>Compition</span> <input type="radio" class="form-control" id="type" name="type" value="compition" style="width: 30px;height: 22px;">
                        </div>
                        <button type="submit" class="btn btn-primary m-4">Submit</button> 
                </form>
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

