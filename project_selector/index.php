<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
    <script src="../js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../styles/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../styles/login/login.css" type="text/css" media="screen" />
        <title></title> 
    </head>
    <body>      
        <?php   
            include '../include/generic/header.php';
        ?>
        <table>
            <tr>
                <td>
                    <div class="boxtitle">Project Selection</div>
                    <div id="container">
                    <?php
                        try {
                            IF ($_SESSION['Login']=="Yes")
                            {           

                                $mysqli = new mysqli("localhost", "root", "", "Ada_Prog_Man");
                                $res = $mysqli->query("SELECT * FROM project");
                                $res->data_seek(0);
                                while ($row = $res->fetch_assoc()) {
                                    echo "<a href='project/proj.php?Proj=" . $row['Project_ID'] . "'>" . $row['Title'] . "</a><br>";
                                }
                            }        
                        } 
                        catch (Exception $e) {
                            //echo 'Caught exception: ',  $e->getMessage(), "\n";
                            echo "<div id='error'>You need to Login</div>";
                        }  
                    ?>
                    </div>
                </td>
            </tr>
        </table>
        
    </body>
</html>