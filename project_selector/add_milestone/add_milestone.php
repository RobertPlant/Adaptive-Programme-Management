<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $start = date_convert($_REQUEST['low']);
    $end = date_convert_end($_REQUEST['y']);

    $mysqli->query("INSERT INTO activity
                        (Project_ID, low, y, activity, criticalActivity, criticals, phase, vendor, color)
                    VALUES
                        (" . $_REQUEST['Proj']  . ", '" . $start  . "', '" . $end  . "', '". $_REQUEST['activity']  . "', '".
            $_REQUEST['criticalActivity']  . "', '". $_REQUEST['criticals']  . "', '". $_REQUEST['phase']  . "', '".
            $_REQUEST['vendor']  . "', '". $_REQUEST['color']  . "')"
    );
    header("Location: ../project/index.php?Proj=" . $_REQUEST['Proj']);
    exit;
}

function date_convert($a) {
    $y = substr($a, 0, 4);          //year
    $m = substr($a, 5, 2) - 1;      //month
    $d = substr($a, 8, 2);          //day
    $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ')';
    return $f;
}

function date_convert_end($a) {
    $y = substr($a, 0, 4);          //year
    $m = substr($a, 5, 2) - 1;      //month
    $d = substr($a, 8, 2);          //day
    $f = 'Date.UTC(' . $y . ', ' . $m . ', ' . $d . ', 23, 59)';
    return $f;
}