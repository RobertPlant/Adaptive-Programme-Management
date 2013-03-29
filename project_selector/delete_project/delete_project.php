<?php
$con = mysql_connect("localhost","eggsdb","eggsdb");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
else
{
    mysql_select_db("ada_prog_man", $con);
    mysql_query("DELETE FROM project
                    WHERE Project_ID='".$_REQUEST['Project_ID']."';");
    mysql_query("DELETE FROM userAccess WHERE projectId ='" . $_REQUEST['Project_ID'] . "';");
    mysql_close($con);
    ob_end_clean();
    header("Location: ../index.php");
    exit;
}