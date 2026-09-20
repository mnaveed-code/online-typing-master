<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
<?php include 'include/head.php'; ?>
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
  <?php include 'include/navbar.php'; ?>
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
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
         <!-- <div class="col-md-12"> -->
            <div class="col-md-4 ">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= $user ?></h3>

                  <p>Total user</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4 ">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= $testtotal ?></h3>

                  <p>Total test</p>
                </div>
                <div class="icon">
                  <i class="ion i-cursor"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4 ">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= $testtotal ?></h3>

                  <p>Total compition</p>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-person-add"></i> -->
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
          <!-- /.col-md-6 -->
        <!-- </div> -->
        <?php if($this->session->userdata('user')) { ?>
        <!-- <div id="container"> </div> -->
       <?php }?>
      </div>
    </div>

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 <?php include 'include/footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php include 'include/jslink.php'; ?>
</body>
  <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
  <script>
        anychart.onDocumentReady(function() {

      // set the data
      var data = {
        header: ["Name", "Result"],
        rows: [
          <?php if($tests){ 
                    foreach($tests as $item){ ?>  
          ["<?= $item['test_title'] ?>", <?= $item['acuracy'] ?>],
          <?php } }?>
      ]};

      // create the chart
      var chart = anychart.column();

      // add data
      chart.data(data);

      // set the chart title
      chart.title("Previous Test and Combition Result");

      // draw
      chart.container("container");
      chart.draw();
      });
    </script>
  </body>
</html>