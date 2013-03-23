<?php
    $con = mysql_connect("localhost","eggsdb","eggsdb");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    else
    { 
        //date formatting
        $start = date_convert($_REQUEST['low']);
        $end = date_convert_end($_REQUEST['y']);
        
        mysql_select_db("ada_prog_man", $con);
        mysql_query("INSERT INTO activity (Project_ID, low, y, activity, criticalActivity, criticals, phase, vendor, color) VALUES (" . $_REQUEST['Proj']  . ", '" . $start  . "', '" . $end  . "', '". $_REQUEST['activity']  . "', '". $_REQUEST['criticalActivity']  . "', '". $_REQUEST['criticals']  . "', '". $_REQUEST['phase']  . "', '". $_REQUEST['vendor']  . "', '". $_REQUEST['color']  . "')");
        mysql_close($con);
        ob_end_clean(); 
        header("Location: ../project/index.php?Proj=" . $_REQUEST['Proj']); 
        exit;  
    }
    
    
    
    function date_convert($a) {
        $y = substr($a, 0, 4);   //year
        $m = substr($a, 5, 2) - 1;   //month
        $d = substr($a, 8, 2);   //day
        $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ')';
        return $f;
    }
    
    function date_convert_end($a) {
        $y = substr($a, 0, 4);   //year
        $m = substr($a, 5, 2) - 1;   //month
        $d = substr($a, 8, 2);   //day
        $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ', 23, 59)';
        return $f;
    }
?>
