<?php
Header("content-type: application/x-javascript");

      $mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
         $res = $mysqli->query("SELECT * FROM activity WHERE Project_ID='".
                 $_GET['Proj']."' ORDER BY low ASC");
         $res->data_seek(0);
         echo '$(function(){' . "\n";
         echo 'var _series = [{' . "\n";
         echo 'data: [';
         $i = 0;
         while ($row = $res->fetch_assoc()) {
             if ($i === 1) {
                 echo ',';
             }
             echo '{' . "\n";
             echo 'low: ' . $row['low'] . ", " . "\n";
             echo 'y: ' . $row['y'] . ", " . "\n";
             echo "activity: '" . $row['activity'] . "', " . "\n";
             echo "criticalActivity: '" . $row['criticalActivity'] . "', " . "\n";
             echo "criticals: '" . $row['criticals'] . "', " . "\n";
             echo "phase: '" . $row['phase'] . "', " . "\n";
             echo "vendor: '" . $row['vendor'] . "', " . "\n";
             echo "activity_id: '" . $row['activity_ID'] . "', " . "\n";
             echo "point: '" . $row['color'] . "', " . "\n";
             echo "events: { click: function () {  window.location = 'activity/index.php?Acti=".$row['activity_ID']."';}}"."}" . "\n";
             
             $i = 1;
         }
         echo  "\n" . "],";
         ?>

    name: 'Activity Schedule',
    showInLegend: false}]

var chart = new Highcharts.Chart({

    chart: {
        renderTo: 'container2',
        type: 'bar',
        zoomType: 'x'
    },       
        <?php
                              
            $desc = $mysqli->query("SELECT * FROM project Where Project_ID=" . $_GET['Proj']);                        
            $desc->data_seek(0);
            $p = $desc->fetch_assoc();       
        ?> 
    title: {text: '<?php echo $p['Title']?>'},
 
    subtitle: {text: '<?php echo $p['Description']?>'},
    xAxis: {
        title: {
            text: 'Activities'
        },
        gridLineWidth: 1,
        categories: [     <?php
                        $res = $mysqli->query("SELECT activity FROM activity ORDER BY low ASC");

                        $res->data_seek(0);
                        while ($row = $res->fetch_assoc()) {
                            echo  "'" . $row['activity'] . "',";
                            echo  "\n";

                        }
                        ?>
              ],
        labels: {
            style: {width: '600px'}
        }
    },
    yAxis: {  //Mark weekends and holidays
        plotBands: [
        {
            color: '#FCFFC5',
            from: Date.UTC(2012, 11, 31),
            to: Date.UTC(2012, 11, 31, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 1),
            to: Date.UTC(2013, 0, 1, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 7),
            to: Date.UTC(2013, 0, 7, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 8),
            to: Date.UTC(2013, 0, 8, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 14),
            to: Date.UTC(2013, 0, 14, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 15),
            to: Date.UTC(2013, 0, 15, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 21),
            to: Date.UTC(2013, 0, 21, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 22),
            to: Date.UTC(2013, 0, 22, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 28),
            to: Date.UTC(2013, 0, 28, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 0, 29),
            to: Date.UTC(2013, 0, 29, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 4),
            to: Date.UTC(2013, 1, 4, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 5),
            to: Date.UTC(2013, 1, 5, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 11),
            to: Date.UTC(2013, 1, 11, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 12),
            to: Date.UTC(2013, 1, 12, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 18),
            to: Date.UTC(2013, 1, 18, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 19),
            to: Date.UTC(2013, 1, 19, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 25),
            to: Date.UTC(2013, 1, 25, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 1, 26),
            to: Date.UTC(2013, 1, 26, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 2, 3),
            to: Date.UTC(2013, 2, 3, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 2, 4),
            to: Date.UTC(2013, 2, 4, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 2, 10),
            to: Date.UTC(2013, 2, 10, 23, 59)},
        {
            color: '#FCFFC5',
            from: Date.UTC(2013, 2, 11),
            to: Date.UTC(2013, 2, 11, 23, 59)}
        ],
        title: {text: ''},
        minorTickInterval: 24 * 3600 * 1000,  // = 1 day
        type: 'datetime',
        min: Date.UTC(2013, 0, 3),
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
            helpTip += '<br/>Activity ID: ' + point.activity_id;
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
    
   
    series: _series

});
});