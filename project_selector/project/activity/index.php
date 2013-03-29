<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php  session_start(); ?>
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Individual Milestone</title>
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
$res = $mysqli->query("SELECT * FROM activity JOIN project ON project.Project_ID=activity.Project_ID JOIN userAccess ON project.Project_ID=userAccess.projectID WHERE activity_ID=" . $_GET['Acti'] . " AND userAccess.userId=" . $_SESSION['UID']);
$res->data_seek(0);
$row = $res->fetch_assoc();
include '../../../include/generic/header.php';
include 'edit_milestone/user_form.php';
include 'delete_milestone/user_form.php';
?>
<table>
    <tr>
        <td>
            <div id="proj-nav">
                <a href="#editActiv-box" class="login-window">
                    <img src="../../../images/edit-milestone.png"/><br/>Edit<br/>Milestone
                </a>
            </div>
            <div id="proj-nav">
                <a href="../index.php?Proj=<?php echo $row['Project_ID']; ?>">
                    <img src="../../../images/back.png"/><br/>Back
                </a>
            </div>
            <div id="proj-nav">
                <a href="#deleteActiv-box" class="login-window">
                    <img src="../../../images/cross.png"/><br/>Delete<br/>Milestone
                </a>
            </div>
            <div id="container" >
                <?php
                If ($_SESSION['Login']=="Yes")
                {
                    ?>
                    <div class="boxTitle"><?php echo $row['activity'];?></div>
                    <?php
                    echo "<b>Activity ID: </b>" . $row['activity_ID'] . "<br/>";
                    echo "<b>Project ID: </b>" . $row['Project_ID'] . "<br/>";
                    echo "<b>Start Date: </b>" . substr($row['low'], 18,-1) ."/".(substr($row['low'], 15)+1). "/" . substr($row['low'], 9,-8) . "<br/>";
                    echo "<b>End Date: </b>" . substr($row['y'], 18,-9) ."/".(substr($row['y'], 15)+1). "/" . substr($row['y'], 9,-16) . "<br/>";
                    echo "<b>Activity: </b>" . $row['activity'] . "<br/>";
                    echo "<b>Critical Activit: </b>" . $row['criticalActivity'] . "<br/>";
                    echo "<b>Success Factor: </b>" . $row['criticals'] . "<br/>";
                    echo "<b>Status: </b>" . $row['phase'] . "<br/>";
                }
                else {
                    echo "<div id='error'>You need to Login</div>";
                }
                ?>
            </div>
        </td>
    </tr>
</table>
</body>
</html>