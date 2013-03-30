<?php
session_start();
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $mysqli->query("INSERT INTO project (Title, Description) VALUES ('" .
        $_REQUEST['Title']  . "', '"  . $_REQUEST['Description']  . "')");
    $res = $mysqli->query("SELECT Project_ID FROM project ORDER BY Project_ID DESC");
    $row = $res->fetch_assoc();
    $mysqli->query("INSERT INTO userAccess (userId, projectId) VALUES ('" .
        $_SESSION['UID']  . "', '"  . $row['Project_ID']  . "')");
    header("Location: ../index.php?p=a");
    exit;
}
