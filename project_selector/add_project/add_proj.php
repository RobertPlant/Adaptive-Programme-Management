<?php
session_start();
$con = mysql_connect("localhost","eggsdb","eggsdb");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
else
{
    mysql_select_db("ada_prog_man", $con);
    mysql_query("INSERT INTO project (Title, Description) VALUES ('" .
        $_REQUEST['Title']  . "', '"  . $_REQUEST['Description']  . "')");
    $result = mysql_query("SELECT Project_ID FROM project ORDER BY Project_ID DESC");
    $row = mysql_fetch_array($result);
    mysql_query("INSERT INTO userAccess (userId, projectId) VALUES ('" .
        $_SESSION['UID']  . "', '"  . $row['Project_ID']  . "')");
    mysql_close($con);
    ob_end_clean();
    header("Location: ../index.php?p=a");
    exit;
}
