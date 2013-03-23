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
    $sql = "SELECT * FROM users WHERE User_ID='" . $_POST["User_ID"] . "';";    
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    CRYPT_BLOWFISH;
    $encrypted = crypt($_POST['Password'], $row['salt']);
    IF ($encrypted)
    {     
        IF ((string)$encrypted == (string)$row['Password'])
        {
            session_start(); 
            $_SESSION['Login']="Yes";
            ob_end_clean(); 
            header("Location: http://176.31.108.26/rob/index.php?l=y"); 
            exit; 
        }
        else 
        {       
            ob_end_clean();
          header("Location:  http://176.31.108.26/rob/index.php?l=n"); 
            exit; 
        }
    }
    mysql_close($con);
   ob_end_clean(); 
   header("Location:  http://176.31.108.26/rob/index.php?l=u"); 
    exit; 
?>
</html>