<head>
<script>
(function(w,d,s,g,js,fs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="ga-dev-tools-master/build/javascript/embed-api/components/view-selector2.js"></script>
<script src="ga-dev-tools-master/build/javascript/embed-api/components/date-range-selector.js"></script>
<script src="ga-dev-tools-master/build/javascript/embed-api/components/active-users.js"></script>
<script src="ga-dev-tools-master/build/javascript/embed-api/components/active-users2.js"></script>
<script src="ga-dev-tools-master/build/javascript/embed-api/components/active-users3.js"></script>   
<script type="text/javascript" src="realtimeScript3.js"></script>
<link rel="stylesheet" href="https://ga-dev-tools.appspot.com/public/css/chartjs-visualizations.css">
<link rel="stylesheet" type="text/css" href="realtimecss.css">
</head>

<body>
<div id="embed-api-auth-container"></div>
<input type="hidden" id="view-selector-container">
<input type="hidden" id="view-name">

<div class="container">



<div class="Chartsjs">
<div id="active-users-container" style="float:left;font-size:20px;"></div>
<h3 align="center">Top 10 Pages</h3>
<figure class="Chartjs-figure" id="chart-Pages"></figure>
</div>
<br/><br/>


<div class="Chartjs">
  <h3 align="center">Category by Device (by pageview)</h3>
  <figure class="Chartjs-figure" id="chart-3-container"></figure>
  <ol class="Chartjs-legend" id="legend-3-container"></ol>
</div>

<div class="Chartsjs">
<h3 align="center">Top Countries and City (by sessions)</h3>
<ol class="Chartjs-legend" id="chart-Rev"></ol>
<figure class="Chartjs-figure" id="chart-Country"></figure>
</div>
<br/><br/>

<div class="Chartjs">
  <h3 align="center">Browsers(by sessions)</h3>
  <figure class="Chartjs-figure" id="chart-6-container"></figure>
  <ol class="Chartjs-legend" id="legend-6-container"></ol>
</div>

<input type="hidden" id="active-users-container2">

<input type="hidden" id="active-users-container3">

<div id="container" ></div>
<button id="button" class="autocompare" hidden>Add point</button>
<button id="button1" class="autocompare" hidden>Add point2</button>

</body>
<script>

