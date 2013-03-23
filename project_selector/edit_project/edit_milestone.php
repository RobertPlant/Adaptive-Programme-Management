<?php
$con = mysql_connect("localhost","eggsdb","eggsdb");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
else
{
    mysql_select_db("ada_prog_man", $con);
    mysql_query("UPDATE project
            SET Title='".$_REQUEST['Title']."', Description='".$_REQUEST['Description']."'
            WHERE Project_ID='".$_REQUEST['Proj']."';");
    mysql_close($con);
    ob_end_clean();
    header("Location: ../project/index.php?Proj=" . $_REQUEST['Proj']);
    exit;
}