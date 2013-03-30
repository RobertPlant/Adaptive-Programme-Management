<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $res = $mysqli->query("SELECT * FROM users WHERE User_ID='" . $_REQUEST["User_ID"] . "';");
    $row = $res->fetch_assoc();
    CRYPT_BLOWFISH;
    $encrypted = crypt($_POST['Password'], $row['salt']);
    IF ($encrypted)
    {
        IF ((string)$encrypted == (string)$row['Password'])
        {
            session_start();
            $_SESSION['Login']="Yes";
            $_SESSION['UID']=$row['ID'];
            header("Location: http://176.31.108.26/rob/index.php?l=y");
            exit;
        }
        else
        {
            header("Location:  http://176.31.108.26/rob/index.php?l=n");
            exit;
        }
    }
    header("Location:  http://176.31.108.26/rob/index.php?l=u");
    exit;
}