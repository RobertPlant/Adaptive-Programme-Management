<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/default.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        
    </head>
    <body>
       <div align="middle">
        <?php
        If ($_SESSION['Login']=="Yes")
        {           
            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><h1>Project Selection</h1><br/>';
            
            $mysqli = new mysqli("localhost", "root", "", "Ada_Prog_Man");
            
            $res = $mysqli->query("SELECT * FROM project");

            $res->data_seek(0);
            while ($row = $res->fetch_assoc()) {
                echo "<a href='proj.php?Proj=" . $row['Project_ID'] . "'>" . $row['Title'] . "</a><br>";
            }
        }
        else
        {
            echo "You need to <a href='../index.php'>Login</a><br>";
        }


        ?>
       </div>
    </body>
</html>