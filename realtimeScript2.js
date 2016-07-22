window.onload = function()
{
gapi.analytics.ready(function() {

  gapi.analytics.auth.authorize({
  	serverAuth: {
  		access_token: 'ya29.CjAoA4sQ5ShvSjPVdHWXMzPZ6nronOvkAYs3wC2WDUoHtBrfOTD3MWOj0_AuAPvgaf4'
  	}
    // container: 'embed-api-auth-container',
    // clientid: '403771359085-kqk8d8i52reqrjeoi1h3vmpuuc6818c9.apps.googleusercontent.com'
  });

   var activeUsers3 = new gapi.analytics.ext.ActiveUsers3({
    container: 'active-users-container3',
    pollingInterval: 1800
  });

  activeUsers3.once('success', function() {
    var element = this.container.firstChild;
    var timeout;

    this.on('change', function(data) {
    var element = this.container.firstChild;
    var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
      element.className += (' ' + animationClass);
      $('#button1').trigger('click');

    clearTimeout(timeout);
      timeout = setTimeout(function() {
      element.className =
      element.className.replace(/ is-(increasing|decreasing)/g, '');
      }, 1000);
    });
  });

   var activeUsers2 = new gapi.analytics.ext.ActiveUsers2({
    container: 'active-users-container2',
    pollingInterval: 30
  });

  activeUsers2.once('success', function() {
    var element = this.container.firstChild;
    var timeout;

    this.on('change', function(data) {
    var element = this.container.firstChild;
    var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
      element.className += (' ' + animationClass);
      $('#button').trigger('click');

    clearTimeout(timeout);
      timeout = setTimeout(function() {
      element.className =
      element.className.replace(/ is-(increasing|decreasing)/g, '');
      }, 1000);
    });
  });


  var activeUsers = new gapi.analytics.ext.ActiveUsers({
    container: 'active-users-container',
    pollingInterval: 5
  });

  activeUsers.once('success', function() { 
    var element = this.container.firstChild;
    var timeout;

    this.on('change', function(data) {
      var element = this.container.firstChild;
      var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
      element.className += (' ' + animationClass);

      clearTimeout(timeout);
      timeout = setTimeout(function() {
        element.className =
            element.className.replace(/ is-(increasing|decreasing)/g, '');
      }, 1000);
    });
  });

  var viewSelector = new gapi.analytics.ext.ViewSelector2({
  	  ids:'ga:126166108',
      container: 'view-selector-container',
  })
  viewSelector.execute();

    viewSelector.on('viewChange', function(data) {
    var title = document.getElementById('view-name');
    title.innerHTML = data.property.name + ' (' + data.view.name + ')';

    activeUsers.set(data).execute();
    activeUsers2.set(data).execute();
    activeUsers3.set(data).execute();


    renderBrowserChart(data.ids);
    renderDeviceChart(data.ids);
  });


$(function () {
        $('#container').highcharts({
          exporting: false,
          title: {
          text: 'Pageviews Last 60 Seconds and 30 Minutes',
          },

        series: [{
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            name: 'Last 60 Seconds'
        },{
        	data: [194.1, 95.6, 54.4, 29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4],
        	name: 'Last 30 Minutes'
        }]

    });

    var i = 0;
    $('#button').click(function () {
        var chart = $('#container').highcharts();
        chart.series[0].addPoint(parseInt($(".ActiveUsers2-value").text()));
        i += 1;
    });
    var o = 0;
      $('#button1').click(function () {
        var chart = $('#container').highcharts();
        chart.series[1].addPoint(parseInt($(".ActiveUsers3-value").text()));
        o += 1;
});
});

  function renderDeviceChart(ids) {
    query({
      'ids': ids,
      'dimensions': 'ga:deviceCategory',
      'metrics': 'ga:sessions',
      'sort': '-ga:sessions',
      'max-results': 5
    })
    .then(function(response) {

      var data = [];
      var colors = ['#949FB1','#4D5360','#D4CCC5','#E2EAE9','#F7464A'];

      response.rows.forEach(function(row, i) {
        data.push({ value: +row[1], color: colors[i], label: row[0] });
      });

      new Chart(makeCanvas('chart-3-container')).Doughnut(data),
      generateLegend('legend-3-container', data);
    });
  }


  var dataChartCountry = new gapi.analytics.googleCharts.DataChart({
    query: {
      ids: '126166108',
      
      metrics: 'ga:sessions',
      dimensions: 'ga:country,ga:city',
      'start-date': 'yesterday',
      // 'end-date': 'today',
      'max-results': 6,
      sort: '-ga:sessions'
    },
    chart: {
      container: 'chart-Country',
      type: 'GEO',
      options: {
        width: '100%',
      }
    }

  });
   dataChartCountry.set({query: {ids: 'ga:126166108'}}).execute();

    var dataChartRev = new gapi.analytics.googleCharts.DataChart({
    query: {
      ids: '126166108',
      
      metrics:'ga:sessions,ga:pageviews',
      dimensions: 'ga:country,ga:city',
      'start-date': 'yesterday',
      // 'end-date': 'today',
      'max-results': 6,
      sort: '-ga:sessions'
    },
    chart: {
      container: 'chart-Rev',
      type: 'TABLE',
      options: {
        width: '100%',
        displayMode: 'markers'
      }
    }

  });
   dataChartRev.set({query: {ids: 'ga:126166108'}}).execute();

    var dataChartPages = new gapi.analytics.googleCharts.DataChart({
    query: {
      ids: '126166108',
      
      metrics:'ga:pageviews,ga:uniquePageviews,ga:timeOnPage,ga:bounces,ga:entrances,ga:exits',
      dimensions: 'ga:landingPagePath',
      'start-date': 'yesterday',
      // 'end-date': 'today',
      'max-results': 10,
      sort: '-ga:pageviews'
    },
    chart: {
      container: 'chart-Pages',
      type: 'TABLE',
      options: {
        width: '80%',
      }
    }

  });
   dataChartPages.set({query: {ids: 'ga:126166108'}}).execute();

  function renderBrowserChart(ids) {
    query({
      'ids': ids,
      'dimensions':'ga:browser',
	  'metrics':'ga:sessions',
      'sort': '-ga:sessions',
      'max-results': 6
    })
    .then(function(response) {

      var data = [];
      var colors = ['#D4CCC5','#4D5360','#949FB1','#E2EAE9','#F7464A','black'];

      response.rows.forEach(function(row, i) {
        data.push({
          label: row[0],
          value: +row[1],
          color: colors[i]
        });
      });

      new Chart(makeCanvas('chart-6-container')).PolarArea(data),
      generateLegend('legend-6-container', data);
    });
  }


  function query(params) {
    return new Promise(function(resolve, reject) {
      var data = new gapi.analytics.report.Data({query: params});
      data.once('success', function(response) { resolve(response); })
          .once('error', function(response) { reject(response); })
          .execute();
    });
  }



  function makeCanvas(id) {
    var container = document.getElementById(id);
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');

    container.innerHTML = '';
    canvas.width = container.offsetWidth;
    canvas.height = container.offsetHeight;
    container.appendChild(canvas);

    return ctx;
  }



  function generateLegend(id, items) {
    var legend = document.getElementById(id);
    legend.innerHTML = items.map(function(item) {
      var color = item.color || item.fillColor;
      var label = item.label;
      return '<li><i style="background:' + color + '"></i>' + label + '</li>';
    }).join('');
  }


  Chart.defaults.global.animationSteps = 60;
  Chart.defaults.global.animationEasing = 'easeInOutQuart';
  Chart.defaults.global.responsive = true;
  Chart.defaults.global.maintainAspectRatio = false;

})};