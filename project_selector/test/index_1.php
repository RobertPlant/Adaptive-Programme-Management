<?php // session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/default.css" />
        <title></title>
        <script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="../js/highcharts.js" type="text/javascript"></script>
        <script src="../js/exporting.js"></script>



    <script type="text/javascript">
var series = [{
    data: [{
        low: Date.UTC(2012, 0, 4),
        y: Date.UTC(2012, 0, 5, 23, 59),
        activity: 'HVAC Rough',
        criticalActivity: 'Roof Labor',
        criticals: '52300 60000        ',
        phase: 'Mechanicals',
        vendor: 'Electric Heat & Air',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 4),
        y: Date.UTC(2012, 0, 5, 23, 59),
        activity: 'Electric Rough',
        criticalActivity: 'HVAC Rough',
        criticals: '60200         ',
        phase: 'Mechanicals',
        vendor: 'Electric Heat & Air',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 6),
        y: Date.UTC(2012, 0, 6, 23, 59),
        activity: 'Plumbing Topout Inspect',
        criticalActivity: 'Plumbing Topout',
        criticals: '51800         ',
        phase: 'Rough Frame',
        vendor: 'City of Sandusky',
        color: '#89A54E'},
    {
        low: Date.UTC(2012, 0, 9),
        y: Date.UTC(2012, 0, 9, 23, 59),
        activity: 'Frame Final',
        criticalActivity: 'Electric Rough',
        criticals: '60300 60400 60600       ',
        phase: 'Mechanicals',
        vendor: 'Joji Kentaro DBA',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 10),
        y: Date.UTC(2012, 0, 10, 23, 59),
        activity: 'Clean Frame',
        criticalActivity: 'Frame Final',
        criticals: '60700         ',
        phase: 'Mechanicals',
        vendor: 'Bill Bellamy',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 10),
        y: Date.UTC(2012, 0, 11, 23, 59),
        activity: 'Inspect Frame',
        criticalActivity: 'Frame Final',
        criticals: '60700         ',
        phase: 'Mechanicals',
        vendor: 'City of Sandusky',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 12),
        y: Date.UTC(2012, 0, 13, 23, 59),
        activity: 'Frame QA',
        criticalActivity: 'Frame Final',
        criticals: '60700 60500 60600 60800 52100 60900    ',
        phase: 'Mechanicals',
        vendor: 'Ben Moore',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 13),
        y: Date.UTC(2012, 0, 16, 23, 59),
        activity: 'Insulation Walls',
        criticalActivity: 'Inspect Frame',
        criticals: '60900 61000        ',
        phase: 'Mechanicals',
        vendor: 'Supplic LLC',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 17),
        y: Date.UTC(2012, 0, 17, 23, 59),
        activity: 'Smart House',
        criticalActivity: 'Inspect Wall Insulation',
        criticals: '61200         ',
        phase: 'Mechanicals',
        vendor: 'Grant Watt',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 17),
        y: Date.UTC(2012, 0, 17, 23, 59),
        activity: 'Drywall Material',
        criticalActivity: 'Smart House',
        criticals: '61300         ',
        phase: 'Drywall/Exterior',
        vendor: 'Supplic LLC',
        color: '#3D96AE'},
    {
        low: Date.UTC(2012, 0, 17),
        y: Date.UTC(2012, 0, 18, 23, 59),
        activity: 'Inspect Wall Insulation',
        criticalActivity: 'Insulation Walls',
        criticals: '61100         ',
        phase: 'Mechanicals',
        vendor: 'City of Sandusky',
        color: '#80699B'},
    {
        low: Date.UTC(2012, 0, 18),
        y: Date.UTC(2012, 0, 18, 23, 59),
        activity: 'Brick',
        criticalActivity: 'Inspect Frame',
        criticals: '60900         ',
        phase: 'Drywall/Exterior',
        vendor: 'Ace Brick',
        color: '#3D96AE'},
    {
        low: Date.UTC(2012, 0, 19),
        y: Date.UTC(2012, 0, 26, 23, 59),
        activity: 'Drywall Labor',
        criticalActivity: 'Drywall Material',
        criticals: '70000 61200        ',
        phase: 'Drywall/Exterior',
        vendor: 'Derrick Sjorn',
        color: '#3D96AE'},
    {
        low: Date.UTC(2012, 0, 23),
        y: Date.UTC(2012, 0, 23, 23, 59),
        activity: 'Garage Door',
        criticalActivity: 'Drywall Labor',
        criticals: '70300         ',
        phase: 'Drywall/Exterior',
        vendor: 'Sandusky Garage Door Inc.',
        color: '#3D96AE'},
    {
        low: Date.UTC(2012, 0, 24),
        y: Date.UTC(2012, 0, 24, 23, 59),
        activity: 'Sand-Masonry',
        criticalActivity: 'Brick',
        criticals: '70100         ',
        phase: 'Drywall/Exterior',
        vendor: 'Mall Trucking LLC',
        color: '#3D96AE'},
    {
        low: Date.UTC(2012, 0, 24),
        y: Date.UTC(2012, 0, 24, 23, 59),
        activity: 'Masonry Pack',
        criticalActivity: 'Brick',
        criticals: '70100         ',
        phase: 'Drywall/Exterior',
        vendor: 'Taj Building Supply',
        color: '#3D96AE'},
    {
        low: Date.UTC(2012, 0, 25),
        y: Date.UTC(2012, 0, 30, 23, 59),
        activity: 'Mason Labor',
        criticalActivity: 'Brick',
        criticals: '70100 60100        ',
        phase: 'Drywall/Exterior',
        vendor: 'Spam Masonry',
        color: '#3D96AE'}
],
    name: 'Activity Schedule',
    showInLegend: false}]

var chart = new Highcharts.Chart({

    chart: {
        renderTo: 'container2',
        type: 'bar',
        zoomType: 'x'
    },
    title: {text: 'Schedule Calendar'},
    subtitle: {text: 'for 1200 Mountain Way Sandusky OK 37069<br/>from 1/1/2012 to 1/31/2012'},
    xAxis: {
        title: {
            text: 'Activities'
        },
        gridLineWidth: 1,
        categories: ['HVAC Rough',
                     'Electric Rough',
                     'Plumbing Topout Inspect',
                     'Frame Final',
                     'Clean Frame',
                     'Inspect Frame',
                     'Frame QA',
                     'Insulation Walls',
                     'Smart House',
                     'Drywall Material',
                     'Inspect Wall Insulation',
                     'Brick',
                     'Drywall Labor',
                     'Garage Door',
                     'Sand-Masonry',
                     'Masonry Pack',
                     'Mason Labor'
              ],
        labels: {
            style: {width: '600px'}
        }
    },
    yAxis: {  //Mark weekends and holidays
        plotBands: [
        {
            color: '#FCFFC5',
            from: Date.UTC(2011, 11, 31),
            to: Date.UTC(2011, 11, 31, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 1),
            to: Date.UTC(2012, 0, 1, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 7),
            to: Date.UTC(2012, 0, 7, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 8),
            to: Date.UTC(2012, 0, 8, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 14),
            to: Date.UTC(2012, 0, 14, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 15),
            to: Date.UTC(2012, 0, 15, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 21),
            to: Date.UTC(2012, 0, 21, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 22),
            to: Date.UTC(2012, 0, 22, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 28),
            to: Date.UTC(2012, 0, 28, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 0, 29),
            to: Date.UTC(2012, 0, 29, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 4),
            to: Date.UTC(2012, 1, 4, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 5),
            to: Date.UTC(2012, 1, 5, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 11),
            to: Date.UTC(2012, 1, 11, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 12),
            to: Date.UTC(2012, 1, 12, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 18),
            to: Date.UTC(2012, 1, 18, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 19),
            to: Date.UTC(2012, 1, 19, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 25),
            to: Date.UTC(2012, 1, 25, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 1, 26),
            to: Date.UTC(2012, 1, 26, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 2, 3),
            to: Date.UTC(2012, 2, 3, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 2, 4),
            to: Date.UTC(2012, 2, 4, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 2, 10),
            to: Date.UTC(2012, 2, 10, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 2, 11),
            to: Date.UTC(2012, 2, 11, 23, 59)}
        ],
        title: {text: ''},
        minorTickInterval: 24 * 3600 * 1000,  // = 1 day
        type: 'datetime',
        min: Date.UTC(2012, 0, 3),
        opposite: true
    },
    plotOptions: {
        series: {  //maximize size of bar while retaining border & shadow
            pointPadding: 0,
            groupPadding: 0,
            borderWidth: 1,
            shadow: true
        }
    },
    tooltip: {
        formatter: function() {
            var point = this.point;
            var helpTip = '<b>' + point.activity + '</b>';
            if (point.criticals.length > 0) {
                helpTip += '<br/>Critical activity: ' + point.criticalActivity;
                helpTip += '<br/>Criticals List: ' + point.criticals;
            }
                        //this works for me in IE but not in Chrome or JSFiddle
            helpTip += '<br/><table width=250 bgcolor=#4572A7><tr><td><font color="#FFFFFF">' 
                        + Highcharts.dateFormat('%b %e, %Y', point.low) + ' - ' 
                        + Highcharts.dateFormat('%b %e, %Y', point.y) 
                        + '</font></td></tr></table>';
            helpTip += '<br/>Stage: ' + point.phase;
            helpTip += '<br/>Vendor: ' + point.vendor;
            return helpTip;
        }
    },
    credits: {
        enabled: false
    },
                        //optimized to print as PDF in Landscape mode
    exporting: {        //1000 --> on Letter page (8.5x11)
        width: 1275     //1275 --> on Legal page  (8.5x14)
    },                  //1560 --> on Tabloid page (11x17)
    
   
    series: series

});​
​

    </script>
  </head>
  <body>
    <div id="container2" style="width: 900px; height: 500px;"></div>
  </body>
</html>
