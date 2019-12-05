<?php
 
$dataPoints1=array();
$dataPoints2 = array();
	
?>
<?php
	$row=array();
 $con=mysqli_connect("localhost","root","","employeetracker");
 if(!$con)
     {
        echo"Database is not connected";
     } 
 $query="SELECT  * FROM `task` WHERE `employee_email_id`='venky@gmail.com';";
 $result=mysqli_query($con,$query); 
 $thours=0;
 if((mysqli_num_rows($result))>=1)
  { 
		$day='';

	 
    // echo"could not insert data:". mysqli_error($con);
    while($row=mysqli_fetch_array($result))
	  {
		$timestamp = strtotime($row['date_of_work_done']);
		$day = date('l', $timestamp);
		//echo $row[0];
		 $thours+=$row['hoursdiff'];
		 
		 	
      }
	  $dataPoints1[]=array("label"=>$day, "y"=>  $thours);
	  $dataPoints2[]=array("label"=>$day, "y"=> 8);
   }

//print_r ($dataPoints1);
//print_r ($dataPoints2);
	
?>

<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Weekly Hours Tracking Report"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Worked Hours",
		indexLabel: "{y}",
		yValueFormatString: "#0.## hours##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Working Hours",
		indexLabel: "{y}",
		yValueFormatString: "#0 hours.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              