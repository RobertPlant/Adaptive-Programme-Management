<?php  session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/default.css" />
        <title></title>
        <script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="../js/highcharts.js" type="text/javascript"></script>
        <script src="../js/exporting.js"></script>



   <?php echo '<script type="text/javascript">' . "\n";
        $mysqli = new mysqli("localhost", "root", "", "Ada_Prog_Man");
        $res = $mysqli->query("SELECT * FROM activity ORDER BY low ASC");
        $res->data_seek(0);
        echo 'var series = [{' . "\n";
        echo 'data: [';
        $i = 0;
        while ($row = $res->fetch_assoc()) {
            if ($i == 1) {
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
            echo "point: '" . $row['color'] . "'} " . "\n";
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
    title: {text: '<?php echo 'Project ' . $_GET['Proj']?>'},
    subtitle: {text: 'Programme Timescale'},
    xAxis: {
        title: {
            text: 'Activities'
        },
        gridLineWidth: 1,
        categories: [      
                        <?php
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
                        
    exporting: {        
        width: 1275     
    },                  
    
    
   
    series: series

});​
​

    </script>
  </head>
<body>
       <div align="middle">
        <?php
        If ($_SESSION['Login']=="Yes")
        {                
            $mysqli = new mysqli("localhost", "root", "", "Ada_Prog_Man");                      
            $res = $mysqli->query("SELECT * FROM project Where Project_ID=" . $_GET['Proj']);                        
                             $res->data_seek(0);
                             $row = $res->fetch_assoc();         
            echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><h1>" . $row['Title'] . "</h1><br/>";           
            $res->data_seek(0);
            echo $row['Description'] . "<br>";                    
            echo '';      
        }
        else
        {
            echo "You need to <a href='../index.php'>Login</a><br>";
        }
        ?>
            <div id="container2" style="width: 1200px; height: 500px;"></div>
        </div>
    </body>
</html>
