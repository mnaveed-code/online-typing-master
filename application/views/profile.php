
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
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
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
                <h3 class="card-title">Profile :</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                  </div>
                  
                </div>
              </div>
              <!-- <a href="<?//= base_url('admin/test/insert')?>" class="btn btn-primary add_new" title="Add ">+Add New </a> -->
              <div class="card-body">
                  <table class="table table-striped responsive-table">
                      <thead>
                          <tr>
                              <th> First name</th>
                              <th> Last name</th>
                              <th> User email</th>
                              <th> Password</th>
                              <th>Edit</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td><?= $users['first_name']; ?></td>
                            <td><?= $users['last_name']; ?></td>
                            <td><?= $users['gmail']; ?></td>
                            <td><?= $users['password']; ?></td>
                            <!-- <td>  <img src="<?//=base_url('upload/').$item['content_img']?>" alt="photo" width="70px" height="40px">   </td> -->
                            <td><a href="<?= base_url('user/profile_edit/').$users['id'] ?>" class="btn btn-success" title="Edit"><i class="nav-icon fas fa-edit"></i></a></td>
                          </tr>
                      </tbody>
                </table>
              </div>
            </div> 
          </div>
       
         </div><!-- /.container-fluid -->
         <?php 
                // if($tests){
                //   if($tests){
                //     foreach($tests as $item){ 
                //     $dataPoints = array( 
                //       "y" => $item['acuracy']  , "label" => "Correct" ,
                //     );
                //   }
                // }
                // }
                  
              ?>


              <!-- <div class="container" id="chartContainer" style="height: 370px; width: 49%; margin:10px; "></div> -->
     </div>
    <!-- /.content -->
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<script>
   window.onload = function() {
                    var chart = new CanvasJS.Chart("chartContainer", {
                      title: {
                        text: "Test result"
                      },
                      axisX: {
                        title: "Result",
                        suffix: "%"
                      },
                      axisY: {
                        title: "Test result",
                        suffix: "%"
                      },
                      data: [{
                        type: "bubble",
                        toolTipContent: " Grapgh ",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                      }]
                    });
                    chart.render();
                  }
</script>
<?php $this->load->view('admin/include/footer.php'); ?>
<?php $this->load->view('admin/include/jslink.php'); ?>
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>              -->
</body>
</html>
  