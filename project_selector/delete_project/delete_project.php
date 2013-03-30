<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $mysqli->query("DELETE FROM project
                    WHERE Project_ID='".$_REQUEST['Project_ID']."';");
    $mysqli->query("DELETE FROM userAccess WHERE projectId ='" . $_REQUEST['Project_ID'] . "';");
    header("Location: ../index.php");
    exit;
}