<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect: ' . mysql_error());
}
else
{
    echo "DELETE FROM userAccess WHERE id=" . $_REQUEST['id'] . ";";
    $mysqli->query("DELETE FROM userAccess WHERE id=" . $_REQUEST['id'] . ";");
    header("Location: ../project/index.php?Proj=" . $_REQUEST['Proj']);
    exit;
}