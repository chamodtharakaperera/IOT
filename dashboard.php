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

    <link rel="stylesheet" href="css/onoff.css">
    <link rel="stylesheet" href="css/systemonoff.css">
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

<!--Motor Control Section Starts Here-->
  <section class="admins">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <h3>Motor Control Panel:</h3>

            <!--On off switch starts here-->
            <div class="admin">
                
                    <main>
                      <h1 class="heading" style="color:white;">Click to turn 
                        <span class="on">
                          <span>
                            on
                          </span>
                        </span>
                        <span class="off">
                          <span>
                            off
                          </span>
                        </span>
                      </h1>
                      <button type="button" class="btn">
                        <span>
                          <b></b>
                          <svg viewBox="-5.5 -5.5 71 71" id="circle">
                            <circle cx="30" cy="30" r="30" stroke="white" stroke-width="11" fill="transparent"></circle>
                          </svg>
                        </span>
                      </button>
                    </main>

                  <script>
                            const btn = document.querySelector('.btn');
                    const heading = document.querySelector('.heading');

                    let active = false;

                    const turnOn = () => {
                      btn.classList.add('active');
                      heading.classList.add('active');
                    }

                    const turnOff = () => {
                      btn.classList.remove('active');
                      heading.classList.remove('active');
                    }

                    const toggleAnimation = () => {
                      btn.classList.remove('animating');
                      active ? turnOn() : turnOff();
                    };

                    function clickHandler() {
                      active = !active;
                      btn.classList.add('animating');
                      
                      btn.addEventListener('animationend', toggleAnimation);
                    }

                    btn.addEventListener('click', clickHandler);



                    btn.addEventListener('animationend', () => {
                      btn.classList.remove('animating');
                      if (active === true) {
                        btn.classList.add('active');
                        heading.classList.add('active');
                      } else {
                        btn.classList.remove('active');
                        heading.classList.remove('active');
                      }
                    });


                    btn.addEventListener('animationend', () => {
                      btn.classList.remove('animating');
                      active ? turnOn() : turnOff();
                    });


                  </script>

              <!--Class Info Ends here-->
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--Motor Control Section Ends here-->         





<!--System Control Section Starts Here-->
<section class="admins">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <h3>System Control Panel:</h3>

            <!--On off switch starts here-->
            <div class="admin">
            <label class="rocker" style="align-items: center;">
                <input type="checkbox">
                <span class="switch-left">ON</span>
                <span class="switch-right">OFF</span>
            </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--System Control Section Ends here-->         



    
</body>
</html>