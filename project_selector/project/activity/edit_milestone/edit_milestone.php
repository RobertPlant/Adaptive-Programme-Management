<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $start = date_decode($_REQUEST['start']);
    $end = date_decode_end($_REQUEST['end']);
    $mysqli->query("UPDATE activity
                    SET
                        activity='".$_REQUEST['activity'].
                        "', criticals='".$_REQUEST['criticals'].
                        "', activity='".$_REQUEST['criticalActivity'].
                        "', criticalActivity='".$_REQUEST['criticalActivity']."',
                        low='".$start."', y='".$end."',
                        phase='".$_REQUEST['phase']."'
                    WHERE activity_ID='".$_REQUEST['Activity_ID']."';");
    header("Location: ../index.php?Acti=" . $_REQUEST['Activity_ID']);
    exit;
}

function date_decode($a)
{
    $y = substr($a, 6, 4);          //year
    $m = substr($a, 3, 2) - 1;      //month
    $d = substr($a, 0, 2);          //day
    $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ')';
    return $f;
}

function date_decode_end($a)
{
    $y = substr($a, 6, 4);          //year
    $m = substr($a, 3, 2) - 1;      //month
    $d = substr($a, 0, 2);          //day
    $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ', 23, 59)';
    return $f;
}
