<?php
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("Ada_Prog_Man", $con);
    
    $sql = "SELECT * FROM users WHERE User_ID='" . $_POST["User_ID"] . "'";    

    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    
    CRYPT_BLOWFISH;
    $encrypted = crypt($_REQUEST['Password'], $row['salt']);

    IF ($encrypted)
    {     
        IF ($encrypted == $row['Password'])
        {
                session_start(); 
                $_SESSION['Login']="Yes";
                ob_end_clean(); 
                header("Location: ../project_selector/index.php"); 
                exit; 
        }
        else 
        {
                ob_end_clean();
                header("Location: ../index.php?l=n"); 
                exit; 
        }
    }
   
    mysql_close($con);
    ob_end_clean(); 
    header("Location: ../index.php?l=u"); 
    exit; 
?>
