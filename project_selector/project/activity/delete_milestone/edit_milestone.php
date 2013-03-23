<?php
//todo implement this functionallity
$con = mysql_connect("localhost","eggsdb","eggsdb");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
else
{
    $start = date_convert($_REQUEST['low']);
    $end = date_convert_end($_REQUEST['y']);

    mysql_select_db("ada_prog_man", $con);
    mysql_query("UPDATE activity SET
                    activity='".$_REQUEST['activity']."', criticals='".$_REQUEST['criticals']."',
                    activity='".$_REQUEST['criticalActivity']."', criticalActivity='".$_REQUEST['criticalActivity']."',
                    low='".$start."', y='".$end."',
                    phase='".$_REQUEST['phase']."'
                    WHERE activity_ID='".$_REQUEST['Activity_ID']."';");
    mysql_close($con);
    ob_end_clean();
    header("Location: ../index.php?Acti=" . $_REQUEST['Activity_ID']);
    exit;
}

function date_convert($a)
{
    $y = substr($a, 0, 4);          //year
    $m = substr($a, 5, 2) - 1;      //month
    $d = substr($a, 8, 2);          //day
    $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ')';
    return $f;
}

function date_convert_end($a)
{
    $y = substr($a, 0, 4);          //year
    $m = substr($a, 5, 2) - 1;      //month
    $d = substr($a, 8, 2);          //day
    $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ', 23, 59)';
    return $f;
}
