<?php
 
$forkin = array(
	array("label"=> 'April 2023', "y"=>40),
	array("label"=> 'Mei 2023', "y"=>10)
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "dark2"
	,
	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	data: [{
		markerSize: 0,
		showInLegend: true,
		name: "Barang Masuk",
		yValueFormatString: "#,##0 Unit",
		dataPoints: <?php echo json_encode($forkin); ?>
	},
]
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
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>