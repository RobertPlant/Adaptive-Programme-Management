<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script type='text/javascript' src='http://176.31.108.26/rob/js/jquery-1.4.2.js'></script>
    <script type='text/javascript' src="http://176.31.108.26/rob/js/testing.js"></script>
    <?php echo "<script type='text/javascript' src='data.php?Proj=" . $_GET['Proj'] . "'></script>" ?>
    <script src="http://176.31.108.26/rob/js/exporting.js" type="text/javascript"></script>
    <title>Individual Milestone</title>
</head>
<body>
<?php
include '../../include/generic/header.php';
include '../add_milestone/user_form.php';
include '../edit_project/user_form.php';
include '../add_edit_userPermissions/user_form.php';
If ($_SESSION['Login']=="Yes")
{
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");

$res = $mysqli->query("SELECT DISTINCT project.Project_ID, project.Title, project.Description FROM project JOIN userAccess ON project.Project_ID=userAccess.projectId WHERE Project_ID=" . $_GET['Proj'] . " AND userAccess.userId=" . $_SESSION['UID']);
$res->data_seek(0);
$row = $res->fetch_assoc();
include '../delete_project/user_form.php';
?>
<table>
    <tr>
        <td>
            <div id="proj-nav">
                <a href="#editProj-box" class="login-window">
                    <img src="../../images/edit-milestone.png"/><br/>Edit<br/>Project
                </a>
            </div>
            <div id="proj-nav">
                <a href="#userPermissions-box" class="login-window">
                    <img src="../../images/edit-milestone.png"/><br/>User Access
                </a>
            </div>
            <div id="proj-nav">
                <a href="#newActiv-box" class="login-window">
                    <img src="../../images/add-milestone.png"/><br/>New<br/>Milestone
                </a>
            </div>
            <div id="proj-nav">
                <a href="#deleteProj-box" class="login-window">
                    <img src="../../images/cross.png"/><br/>Delete<br/>Project
                </a>
            </div>
            <div id="proj-nav">
                <a href="../index.php">
                    <img src="../../images/back.png"/><br/>Back
                </a>
            </div>
            <div id="container" style="height:450px">
                <?php
                echo "<div class='boxTitle'>" . $row['Title'] . "</div>";
                echo $row['Description'];
                ?>
                <div id="chartContainer"
                     style="height: 350px; width: 800px; margin: 0 auto">
                </div>
                <?php
                }
                else
                {
                    echo "<div id='error'>You need to Login</div>";
                    exit;
                }
                ?>
            </div>
        </td>
    </tr>
</table>
</body>
</html>

