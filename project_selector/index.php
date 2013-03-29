<!DOCTYPE html>

<html>     
    <?php
    include '../include/generic/header.php';
    include 'add_project/user_form.php';
    ?>
    <title>Project Selection</title>
    <table>
        <tr>
            <td>
                <div class="boxTitle">Project Selection</div>
                <div id="container">
                    <div id="proj-nav">     
                        <a href="../index.php">
                            <img src="../images/back.png"/><br/>Back
                        </a>
                    </div> 
                    <div id="proj-nav">
                        <a href="#addProj-box" class="login-window">
                            <img src="../images/add-milestone.png"/><br/>Add<br/>Project
                        </a>
                    </div>
                    <?php
                    try {
                        IF ($_SESSION['Login'] == "Yes") {
                            $mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
                            $prog = $mysqli->query("SELECT DISTINCT project.Project_ID, project.Title FROM project RIGHT JOIN userAccess ON project.Project_ID=userAccess.projectId WHERE userAccess.userId=" . $_SESSION['UID'] . ";");
                            $prog->data_seek(0);
                            while ($j = $prog->fetch_assoc()) {
                                echo "<h2><a href='project/index.php?Proj=" . $j['Project_ID'] . "'>" . $j['Title'] . "</h2></a><br>";
                                $proj = $mysqli->query("SELECT * FROM activity WHERE Project_ID='" . $j['Project_ID'] . "'");
                                $proj->data_seek(0);
                                while ($i = $proj->fetch_assoc()) {
                                    $date = substr($i['y'], 18, -9) . "/" . (substr($i['y'], 15) + 1) . "/" . substr($i['y'], 9, -16);
                                    echo "<div id='proj'><img src='../images/prog-dot.png'><b><a href='project/activity/index.php?Acti=" . $i['activity_ID'] . "'>" . $i['activity'] . "</a></b>, Deadline - " . $date . "</div>";
                                }
                            }   //Use a Join instead?
                        } else {
                            throw new Exception;
                        }
                    } catch (Exception $e) {
                        echo $e->getMessage();
                        echo "<div id='error'>You need to Login</div>";
                    }
                    ?>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>