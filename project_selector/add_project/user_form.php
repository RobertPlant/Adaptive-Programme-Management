<div id="addProj-box" class="login-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
    <div align="right"><a href="#" class="close"><img src="http://176.31.108.26/rob/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
    <h1> Add Project </h1>
    <form method="post" class="signin" action="http://176.31.108.26/rob/project_selector/add_project/add_proj.php">
        <fieldset class="textbox">

            <label class="username">
                <span>Title: </span>
                <input size="25" type="text" placeholder="Project Title" name="Title" value="<?php echo $k['Title'] ?>">
            </label>
            <label class="username">
                <span>Description: </span>
                <input size="25" type="text" placeholder="Project Description" name="Description" value="<?php echo $k['Description'] ?>">
            </label>
            <button class="submit button" type="submit">Add Project!</button>
        </fieldset>
    </form>
</div>
