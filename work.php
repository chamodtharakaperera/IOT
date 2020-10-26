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

<html>

<head>
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
<header style="background:#1abc9c;">
<a href="index.php">
<img src="https://i.ibb.co/PDVwycx/Shape-1-1.png" alt="Back Icon" width="30" height="40" style="padding:20px">
</a>
</header>
<br/><br/>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br/><br/>
<h3 style="text-align: center;font-family: 'Acme';font-size: 22px;">X axis = One time Value </h3>
<h3 style="text-align: center;font-family: 'Acme';font-size: 22px;">Y axis = Moisture Value </h3>
</body>

</html>