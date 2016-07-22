<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="data1.css">
	<?php include('ga_script.php'); ?>
	<script type="text/javascript" src="realtimeScript2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<style type="text/css"> .dontShow{ display: none; }</style>
</head>
	
<body>
		    <div class="dontShow">     
			<div id="embed-api-auth-container"></div>
			<div id="view-selector-container"></div>
			<input type="hidden" id="view-name" />
			</div>
					<h1 align="center"> DISPLAYING 2ND DATA </h1>
					<div id="page2">
					
					<div class="inner4">
							<div class="Chartsjs">
								<h3>Top Countries and City (by sessions)</h3>
								<ol class="Chartjs-legend" id="chart-Rev"></ol>
								<figure class="Chartjs-figure" id="chart-Country"></figure>
							</div>
					</div> 

					</div>

					<div id="page1">
					<div class="innerLeft">
						<div class="inner2">
							<div class="Chartjs">
							<h3>Active Users</h3>
							<figure class="Chartjs-figure" id="active-users-container"></figure>
							</div>	
						</div>
						<div class="inner2">
							<div class="Chartjs">
							 <h3>Browsers(by sessions)</h3>
							  <figure class="Chartjs-figure" id="chart-6-container"></figure>
							  <ol class="Chartjs-legend" id="legend-6-container"></ol>
							</div>	
						</div>
						<div class="inner2">
							<div class="Chartjs">
							  <h3>Category by Device (by pageview)</h3>
							  <figure class="Chartjs-figure" id="chart-3-container"></figure>
							  <ol class="Chartjs-legend" id="legend-3-container"></ol>
							</div>
						</div>
						<div class="inner1" id="box2">
							<div id="container"></div>
							<button id="button" class="autocompare" hidden>Add point</button>
							<button id="button1" class="autocompare" hidden>Add point2</button>
							<input type="hidden" id="active-users-container2">
							<input type="hidden" id="active-users-container3">
						</div>
						<div class="inner5">
							<div class="Chartsjs">
								<h3>Top 10 Pages</h3>
								<figure class="Chartjs-figure" id="chart-Pages"></figure>
							</div>
						</div>
					</div>
						
						
					</div>

					<script>
						$(document).ready(function(){
							$('#page2').hide();

							var timeInterval = 8000;
							var counter = 1;
							var numberOfPages = 3;
							setInterval(function(){
									//show current data page counter
									$("#page" + counter).fadeIn(1000).delay(timeInterval).fadeOut(200); 
									//increment in preparation for next page to flash
									counter++;	

									//reset counter if number of pages reached
										if (counter === numberOfPages){
											counter = 1;
											// location.reload(timeInterval);
									}

								}, timeInterval);
						})
					</script>

</body>