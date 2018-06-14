<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Analytics -->
<?php session_start();?>

<!-- End Google Analytics -->
<style>
.my-card {
  width: 100%;
  max-width: 800px;
	min-width: 500px;

  margin: 0 auto;
	margin-top:30px;
  background-color: white;
}

</style>
</head>
<body>
<div id="container">
<div class="my-card">
<div class="card">
    <div class="card-header" style="background-color: grey; color: white">
      Website Information
      </div>
      <div class="card-block">
  			<div style="text-align:center; line-height: 0.8; ">
        <section id="auth-button"></section>
         <section id="view-selector"></section>
          <section id="timeline"></section>
         <script>
(function(w,d,s,g,js,fjs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
  js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
}(window,document,'script'));
</script>

<script>
gapi.analytics.ready(function() {

  // Step 3: Authorize the user.

  var CLIENT_ID = '360320920603-oks84accjfjom2ftdq9jh8g3q8qdbl2d.apps.googleusercontent.com';

  gapi.analytics.auth.authorize({
    container: 'auth-button',
    clientid: CLIENT_ID,
  });

  // Step 4: Create the view selector.

  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector'
  });

  // Step 5: Create the timeline chart.

  var timeline = new gapi.analytics.googleCharts.DataChart({
    reportType: 'ga',
    query: {
      'dimensions': 'ga:date',
      'metrics': 'ga:sessions',
      'start-date': '30daysAgo',
      'end-date': 'yesterday',
    },
    chart: {
      type: 'LINE',
      container: 'timeline'
    }
  });

  // Step 6: Hook up the components to work together.

  gapi.analytics.auth.on('success', function(response) {
    viewSelector.execute();
  });

  viewSelector.on('change', function(ids) {
    var newIds = {
      query: {
        ids: ids
      }
    }
    timeline.set(newIds).execute();
  });
});
</script>
  			</div>
      </div>
    </div>
    </div>
    </div>
    </body>

</html>