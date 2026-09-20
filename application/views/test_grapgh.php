
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Result</title>
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
              <li class="breadcrumb-item"><a href="#">Resilt</a></li>
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
          <div class="content-wrapper" style="display:flex;">
              
              <?php 
              $dataPoints = array( 
                      array("y" => $result['correct_character'], "label" => "Correct" ),
                      array("y" =>  $result['wrong_character'], "label" => "Wrong" )
                      // array("name" => "Correct", "x" => $result['correct_character'], "y" => 40, "z" => 200),
                      // array("name" => "Wrong", "x" => $result['wrong_character'], "y" => 40, "z" => 200)
                  );
                  
              ?>


              <div class="container" id="chartContainer" style="height: 370px; width: 49%; margin:10px; "></div>
              <?php
              $Points = array( 
                array("label"=>"Acuracy", "y"=>$result['acuracy']),
                array("label"=>"Finsh Time", "y"=>$result['finsh_time'])
              )
              ?>

              <script>
                  window.onload = function() {
                  
                  
                  var chart = new CanvasJS.Chart("circlechartContainer", {
                      animationEnabled: true,
                      title: {
                          text: "Acuracy of typing"
                      },
                      subtitles: [{
                          text: " "
                      }],
                      data: [{
                          type: "pie",
                          yValueFormatString: "#,##0.00\"%\"",
                          indexLabel: "{label} ({y})",
                          dataPoints: <?php echo json_encode($Points, JSON_NUMERIC_CHECK); ?>
                      }]
                  });

                  chart.render();


                  var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:{
                      text: "Test Result "
                    },
                    axisY: {
                      title: "Result "
                    },
                    data: [{
                      type: "column",
                      yValueFormatString: "#,##0.## Character",
                      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                  });
                  chart.render();

                   
                    // var chart = new CanvasJS.Chart("chartContainer", {
                    //   title: {
                    //     text: "Test result"
                    //   },
                    //   axisX: {
                    //     title: "Result",
                    //     suffix: "%"
                    //   },
                    //   axisY: {
                    //     title: "Test result",
                    //     suffix: "%"
                    //   },
                    //   data: [{
                    //     type: "bubble",
                    //     toolTipContent: " Grapgh ",
                    //     dataPoints: <?php //echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    //   }]
                    // });
                    // chart.render();
                  }
              </script>

              <div id="circlechartContainer" style="height: 370px; width: 48%; margin:10px;"></div>
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>             
</body>
</html>
  



<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php// $this->load->view('admin/includes/head'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" >
  
  <?php //$this->load->view('admin/includes/sidebar'); ?>
  <div class="content-wrapper" style="display:flex;">
  
    <?php 
   // $dataPoints = array( 
     //       array("y" => $result['correct_character'], "label" => "Correct" ),
       //     array("y" =>  $result['wrong_character'], "label" => "Wrong" )
        //);
    ?>

    <div class="container" id="chartContainer" style="height: 370px; width: 49%; margin:10px; "></div>
    <?php
  //  $Points = array( 
    //  array("label"=>"Acuracy", "y"=>$result['acuracy']),
      //array("label"=>"Finsh Time", "y"=>$result['finsh_time'])
    //)
   ?>

    <script>
        window.onload = function() {
        
        
        var chart = new CanvasJS.Chart("circlechartContainer", {
            animationEnabled: true,
            title: {
                text: "Acuracy of typing"
            },
            subtitles: [{
                text: " "
            }],
            data: [{
                type: "pie",
                yValueFormatString: "#,##0.00\"%\"",
                indexLabel: "{label} ({y})",
                dataPoints: <?php //echo json_encode($Points, JSON_NUMERIC_CHECK); ?>
            }]
        });

        chart.render();
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "light2",
          title:{
            text: "Test Result "
          },
          axisY: {
            title: "Result "
          },
          data: [{
            type: "column",
            yValueFormatString: "#,##0.## Character",
            dataPoints: <?php //echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
          }]
        });
        chart.render();
        }
    </script>

  <div id="circlechartContainer" style="height: 370px; width: 48%; margin:10px;"></div>

</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>               
<?php //$this->load->view('admin/includes/footer'); ?>
<?php //$this->load->view('admin/includes/jslink'); ?>
</body>
</html>
   -->