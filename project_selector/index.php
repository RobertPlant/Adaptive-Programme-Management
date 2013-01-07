<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../styles/default.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
    <script src="../js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../styles/slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../styles/slider/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../styles/login/login.css" type="text/css" media="screen" />
        <title></title> 
    </head>
    <body>      
       <div align="middle">
        <?php   
            include '../include/generic/header.php';
            try {
                IF ($_SESSION['Login']=="Yes")
                {           
                    echo '<h1>Project Selection</h1><br/>';
                    $mysqli = new mysqli("localhost", "root", "", "Ada_Prog_Man");
                    $res = $mysqli->query("SELECT * FROM project");
                    $res->data_seek(0);
                    while ($row = $res->fetch_assoc()) {
                        echo "<a href='proj.php?Proj=" . $row['Project_ID'] . "'>" . $row['Title'] . "</a><br>";
                    }
                }        
            } 
            catch (Exception $e) {
                //echo 'Caught exception: ',  $e->getMessage(), "\n";
                echo "<div id='error'>You need to Login</div>";
            }  
        ?>
       </div>
    </body>
</html>