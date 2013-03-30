<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $mysqli->query("DELETE FROM activity
                    WHERE activity_ID='".$_REQUEST['activity_ID']."';");
    header("Location: ../../index.php?Proj=" . $_REQUEST['Project_ID']);
    exit;
}