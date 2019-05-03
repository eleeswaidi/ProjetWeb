<?php



$db=config::getConnexion();

$c1=new Crud();
$liste1=$c1->statisticnbrtype();
  



		?>



<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Statistiques des Produit par rapport au Type "
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		dataPoints: [
	

	<?php 
	 foreach ($liste1 as $key) { ?>
		{ y: <?php echo $key['nbr']; ?>, label: "<?php echo $key['type']; ?>" },
	<?php } ?>
		
			
			
			
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>

