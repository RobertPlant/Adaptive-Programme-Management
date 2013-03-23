
<!--/todo implement this functionallity-->
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
                            <input size="25" type="text" name="activity">
                        </label>
                        <label class="username">
                            <span>Associated Project: </span>
                            <input size="25"  type="text" name="Project_ID"></label>
                        <label class="username">
                            <span>Critical Factors: </span>
                            <input size="25" type="text" name="criticalActivity"> </label>
                    </td>
                    <td>
                        <label class="username">
                            <span>Date From: </span>
                            <input size="25" type="date" name="low"></label>
                        <label class="username">
                            <span>Date Till: </span>
                            <input size="25" type="date" name="y"></label>
                        <label class="username">
                            <span>Current Status: </span>
                            <input size="25" type="text" name="phase"> </label>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="Proj" value="<?php echo $_GET['Proj']; ?>">
            <button class="submit button" type="submit">Add Milestone!</button>
        </fieldset>
    </form>
</div>
