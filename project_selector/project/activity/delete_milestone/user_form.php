<!--/todo implement this functionallity-->
<div id="deleteActiv-box" class="login-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
    <div align="right"><a href="#" class="close"><img src="http://176.31.108.26/rob/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
    <h1> Delete Milestone </h1>
    <form method="post" class="signin" action="http://176.31.108.26/rob/project_selector/project/activity/delete_milestone/delete_milestone.php">
        <fieldset class="textbox">
            <p>Are you sure you want to delete this milestone, (theres no going back)</p>
            <input type="hidden" name="activity_ID" value="<?php echo $_GET['Acti']; ?>">
            <input type="hidden" name="Project_ID" value="<?php echo $row['Project_ID']; ?>">
            <button class="submit button" type="submit">Delete!</button>
        </fieldset>
    </form>
</div>
