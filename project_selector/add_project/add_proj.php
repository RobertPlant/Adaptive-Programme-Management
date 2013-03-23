<?php
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
        
        mysql_close($con);
        ob_end_clean(); 
        header("Location: ../index.php?p=a"); 
        exit;  
    }
    
    

?>
