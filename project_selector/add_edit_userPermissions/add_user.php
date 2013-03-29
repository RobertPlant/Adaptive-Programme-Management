<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect: ' . mysql_error());
}
else
{

    $res = $mysqli->query("SELECT * FROM users WHERE User_ID='" . $_REQUEST['name'] . "';");
    $res->data_seek(0);
    $row = $res->fetch_assoc();
    $UID = $row['ID'];
    $res = $mysqli->query("SELECT * FROM userAccess WHERE projectId=" .  $_REQUEST['Proj'] . " AND  userId=" .  $UID . ";");
    $res->data_seek(0);
    $row = $res->fetch_assoc();
    If ($row['projectId'] == null) {
        $mysqli->query("INSERT INTO userAccess (userId, projectId) VALUES (" . $UID . ", " . $_REQUEST['Proj'] . ");");
    } else
    {
        header("Location: ../project/index.php?Proj=" . $_REQUEST['Proj'] . "&priv=all");
        exit;
    }
    header("Location: ../project/index.php?Proj=" . $_REQUEST['Proj']);
    exit;
}