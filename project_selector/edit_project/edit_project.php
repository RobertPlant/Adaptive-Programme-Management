<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $mysqli->query("UPDATE project
            SET Title='".$_REQUEST['Title']."', Description='".$_REQUEST['Description']."'
            WHERE Project_ID='".$_REQUEST['Proj']."';");
    header("Location: ../project/index.php?Proj=" . $_REQUEST['Proj']);
    exit;
}