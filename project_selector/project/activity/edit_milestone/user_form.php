<?php
$mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
$l = $mysqli->query("SELECT * FROM activity Where activity_ID=" . $_GET['Acti']);
$l->data_seek(0);
$k = $l->fetch_assoc();
?>
<!--/todo Work on the date stuff-->
<div id="editActiv-box" class="login-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
    <div align="right"><a href="#" class="close"><img src="http://176.31.108.26/rob/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
    <h1> Edit Milestone </h1>
    <form method="post" class="signin" action="http://176.31.108.26/rob/project_selector/add_milestone/add_milestone.php">
        <fieldset class="textbox">
            <table>
                <tr>
                    <td>
                        <label class="username">
                            <span>Activity: </span>
                            <input size="25" type="text" name="activity" value="<?php echo $k['activity'] ?>">
                        </label>
                        <label class="username">
                            <span>Associated Project: </span>
                            <input size="25"  type="text" name="Project_ID"  value="<?php echo $k['criticals'] ?>"></label>
                        <label class="username">
                            <span>Critical Factors: </span>
                            <input size="25" type="text" name="criticalActivity"  value="<?php echo $k['criticalActivity'] ?>"> </label>
                    </td>
                    <td>
                        <label class="username">
                            <span>Date From: </span>
                            <input size="25" type="date" name="low"  value="<?php echo $k['low'] ?>"></label>
                        <label class="username">
                            <span>Date Till: </span>
                            <input size="25" type="date" name="y"  value="<?php echo $k['y'] ?>"></label>
                        <label class="username">
                            <span>Current Status: </span>
                            <input size="25" type="text" name="phase"  value="<?php echo $k['phase'] ?>"> </label>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="Proj" value="<?php echo $_GET['Proj']; ?>">
            <button class="submit button" type="submit">Add Milestone!</button>
        </fieldset>
    </form>
</div>
