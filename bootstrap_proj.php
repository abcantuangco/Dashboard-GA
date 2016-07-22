<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project using Bootstrap</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<style type="text/css">
		p{
			background: rgba(26, 26, 26, 0.8);
			color: #ffffe6;
		}
		body{
			text-align: justify;	
			height: 100%;
			width: 100%;
			background: #fff;
		}
		h3{
			text-align: center;
		}
	</style>

	<script>
	(function(w,d,s,g,js,fs){
	  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
	  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
	  js.src='https://apis.google.com/js/platform.js';
	  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
	}(window,document,'script'));
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
	<script src="ga-dev-tools-master/build/javascript/embed-api/components/view-selector2.js"></script>
	<script src="ga-dev-tools-master/build/javascript/embed-api/components/date-range-selector.js"></script>
	<script src="ga-dev-tools-master/build/javascript/embed-api/components/active-users.js"></script>
	<script src="ga-dev-tools-master/build/javascript/embed-api/components/active-users2.js"></script>  
	<script type="text/javascript" src="realtimeScript.js"></script>
	<link rel="stylesheet" href="https://ga-dev-tools.appspot.com/public/css/chartjs-visualizations.css">	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</head>
		
<body>
	<div class="col-sm-6" style="margin: 0; padding: 0;">
		<object id="obj" data="scrollpage.html" width="100%"></object>
	</div>

	<div class="col-sm-6">
			<div class="row">
				<div class="col-md-3 col-xs-12">
					<div class="Chartjs">
					  <h3>Top 10 Pages</h3>
						<figure class="Chartjs-figure" id="chart-Pages"></figure>
					</div>
				</div>

				<div class="col-md-6 col-xs-12">
					<div class="Chartjs">
					 <h3>Top Countries and City (by sessions)</h3>
						<ol class="Chartjs-legend" id="chart-Rev"></ol>
						<figure class="Chartjs-figure" id="chart-Country"></figure>
					</div>
				</div>

				<div class="col-md-3 col-xs-12"	>
					<div class="Chartjs">
					  <h3>This Year vs Last Year (by users)</h3>
							  <figure class="Chartjs-figure" id="chart-2-container"></figure>
							  <ol class="Chartjs-legend" id="legend-2-container"></ol>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="Chartjs">
					  <h3>Category by Device (by pageview)</h3>
							  <figure class="Chartjs-figure" id="chart-3-container"></figure>
							  <ol class="Chartjs-legend" id="legend-3-container"></ol>
					</div>
				</div>

				<div class="col-md-6 col-xs-12"	>
					<div class="Chartjs">
					   <h3>Browsers(by sessions)</h3>
							  <figure class="Chartjs-figure" id="chart-6-container"></figure>
							  <ol class="Chartjs-legend" id="legend-6-container"></ol>
							</div>	
				</div>
			</div>
			<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="Chartjs">
					  <h3>Minute(by sessions)</h3>
					  <figure class="Chartjs-figure" id="chart-6-container"></figure>
					  <ol class="Chartjs-legend" id="legend-6-container"></ol>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<div id="embed-api-auth-container"></div>
						<!-- 	 -->
						<input type="hidden" id="view-name">
					</div>
					<div class="col-md-6">
						<div id="active-users-container"></div><br><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="embed-api-auth-container" class="embed-api-auth-container"></div>
	<input type="hidden" id="view-selector-container"></input>
	
	<script>
		// document.getElementById("embed-api-auth-container").onload = click();
		$(document).ready(function(){
        	$("#obj").css("height", window.innerHeight); 
	    });
       
	</script>
	
	<script type="text/javascript" src="module2.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>