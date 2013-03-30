<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
if (!$mysqli)
{
    die('Could not connect to the database');
}
else
{
    $res = $mysqli->query("SELECT * FROM users WHERE User_ID='" . $_REQUEST["User_ID"] . "'");
    $row = $res->fetch_assoc();
    If ($row['User_ID'])
    {
        header("Location: ../index.php?u=u");
        exit;
    }
    else
    {
        CRYPT_BLOWFISH;
        $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
        $salt = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
        $encrypted = crypt($_REQUEST['Password'], $salt);
        $mysqli->query("INSERT INTO users (User_ID, Password, salt) VALUES ('" . $_REQUEST['User_ID']  . "', '" . $encrypted . "','" . $salt . "')");
        header("Location: ../index.php?l=c");
        exit;
    }
}