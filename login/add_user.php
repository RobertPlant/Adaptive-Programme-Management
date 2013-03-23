<!DOCTYPE html>
<html>
    <head>
        <title>Logging in...</title>
    </head>
    <body>
        
    </body>
<?php
    $con = mysql_connect("localhost","eggsdb","eggsdb");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
        exit;
    }
    mysql_select_db("ada_prog_man", $con);
    $sql = "SELECT * FROM users WHERE User_ID='" . $_POST["User_ID"] . "'";    
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    If ($row['User_ID'])
    {
        mysql_close($con);
        ob_end_clean(); 
        header("Location: ../index.php?u=u"); 
        exit;     
    }
    else
    {
        CRYPT_BLOWFISH;
        $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
        $salt = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
        $encrypted = crypt($_REQUEST['Password'], $salt);
        mysql_query("INSERT INTO users (User_ID, Password, salt) VALUES ('" . $_REQUEST['User_ID']  . "', '" . $encrypted . "','" . $salt . "')");
        mysql_close($con);
        ob_end_clean(); 
        header("Location: ../index.php?l=c"); 
        exit;  
    }
?>
</html>