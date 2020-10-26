<?php
    include('dbconfig.php');
    
	$ref = "MoistureValues/";
    $fetchdata = $database->getReference($ref)->getValue();

    foreach($fetchdata as $key => $row)
    {
        /*echo $row['1002'];
		echo $row['1003'];
		echo $row['1004'];
		echo $row['1005'];
		echo $row['1006'];
		echo $row['1007'];
		echo $row['1008'];
		echo $row['1009'];*/
		
		$dataPoints = array(
			array("x"=> 1002, "y"=> $row['1002'], "indexLabel"=> "Oldest"),
			array("x"=> 1003, "y"=> $row['1003']),
			array("x"=> 1004, "y"=> $row['1004']),
			array("x"=> 1005, "y"=> $row['1005']),
			array("x"=> 1006, "y"=> $row['1006']),
			array("x"=> 1007, "y"=> $row['1007']),
			array("x"=> 1008, "y"=> $row['1008']),
			array("x"=> 1009, "y"=> $row['1009']),
			array("x"=> 1010, "y"=> $row['1010']),
			array("x"=> 1011, "y"=> $row['1011']),
			array("x"=> 1012, "y"=> $row['1012']),
			array("x"=> 1013, "y"=> $row['1013']),
			array("x"=> 1014, "y"=> $row['1014'], "indexLabel"=> "Newest")
	);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="js/dashboard.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Moisture Report"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "line", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>


    
<aside class="side-nav" id="show-side-navigation1">
  <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
  <div class="heading">
    <img src="https://img2.pngio.com/blue-circle-home-icon-png-house-address-png-512_512.png" alt="IOT Project Dashboard">
    <div class="info">
      <h3><a href="#">IOT Wifi Moisture Sensing Device Control Panel</a></h3>
      <p>HND IOT FINAL PROJECT</p>
    </div>
  </div>
  <ul class="categories">
    <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="#"> Moisture Report</a>
    </li>
    <li><i class="fa fa-support fa-fw"></i><a href="#"> Temperature Report</a>
    </li>
    <li><i class="fa fa-envelope fa-fw"></i><a href="#"> Humidity Report</a>
    </li>
    <li><i class="fa fa-users fa-fw"></i><a href="#"> Light Report</a>
    </li>
    <li><i class="fa fa-bolt fa-fw"></i><a href="#"> Motor Control</a>
    </li>
  </ul>
</aside>
<section id="contents">
  </nav>
  <div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Welcome to Dashboard</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-envelope fa-fw bg-primary"></i>
            <div class="info">
              <h3>1,245</h3> <span>Emails</span>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-file fa-fw danger"></i>
            <div class="info">
              <h3>34</h3> <span>Projects</span>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-users fa-fw success"></i>
            <div class="info">
              <h3>5,245</h3> <span>Users</span>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="charts">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Moisture Report</h3>
            <p>This chart represents moisture data required for analysis.<br/><br/><br/></p>
            <div id="chartContainer" style="height: 370px; width: 1000px;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          </div>
        </div>
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Chart2</h3>
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="admins">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
          <div class="box">
            <h3>Moderators:</h3>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907114/small/1501685404/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
    <section class='statis text-center'>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="box bg-primary">
              <i class="fa fa-eye"></i>
              <h3>5,154</h3>
              <p class="lead">Page views</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box danger">
              <i class="fa fa-user-o"></i>
              <h3>245</h3>
              <p class="lead">User registered</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box warning">
              <i class="fa fa-shopping-cart"></i>
              <h3>5,154</h3>
              <p class="lead">Product sales</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box success">
              <i class="fa fa-handshake-o"></i>
              <h3>5,154</h3>
              <p class="lead">Transactions</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="chrt3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
            <div class="chart-container">
              <canvas id="chart3" width="100%"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>


</body>
</html>