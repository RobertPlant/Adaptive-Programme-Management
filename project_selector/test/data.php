<?php
//session_start();
header( "Content-Type: text/xml" );

$xmlpage = '<?xml version="1.0"?>';


//If ($_SESSION['Login']=="Yes")
//{           
   
    $mysqli = new mysqli("localhost", "root", "", "Ada_Prog_Man");

    $res = $mysqli->query("SELECT * FROM activity");

    $res->data_seek(0);
    while ($row = $res->fetch_assoc()) {
        $xmlpage .= '<activity>';
            $xmlpage .= '<activity_ID>' . $row['activity_ID'] . '</activity_ID>';
            $xmlpage .= '<Project_ID>' . $row['Project_ID'] . '</Project_ID>';
            $xmlpage .= '<data>';
                $xmlpage .= '<point>' . $row['low'] . '</point>';
                $xmlpage .= '<point>' . $row['y'] . '</point>';
                $xmlpage .= '<point>' . $row['activity'] . '</point>';
                $xmlpage .= '<point>' . $row['criticalActivity'] . '</point>';
                $xmlpage .= '<point>' . $row['criticals'] . '</point>';
                $xmlpage .= '<point>' . $row['phase'] . '</point>';
                $xmlpage .= '<point>' . $row['vendor'] . '</point>';
                $xmlpage .= '<point>' . $row['color'] . '</point>';
            $xmlpage .= '</data>';
        $xmlpage .= '</activity>';
    }
//}
//else
//{
//    echo "You need to <a href='../index.php'>Login</a><br>";
//}


echo $xmlpage;

?>