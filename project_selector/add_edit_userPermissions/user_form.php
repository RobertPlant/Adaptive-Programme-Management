<div id="userPermissions-box" class="login-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
    <div align="right"><a href="#" class="close"><img src="http://176.31.108.26/rob/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
    <h1> Update Permissions </h1>
    <h3>Current users who have access:</h3>
    <?php
    $mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");
    $prog = $mysqli->query("SELECT * FROM userAccess JOIN users ON userAccess.userId=users.ID WHERE projectId='" . $_GET['Proj'] . "';");
    $prog->data_seek(0);
    while ($j = $prog->fetch_assoc()) {
        echo  "<p>" . $j['User_ID'] . " - <a href='http://176.31.108.26/rob/project_selector/add_edit_userPermissions/remove_permissions.php?id=" . $j['id'] . "&Proj=" . $_REQUEST['Proj'] . "'>Remove this user</a></p>";
    }
    ?>
    <form method="post" class="signin" action="http://176.31.108.26/rob/project_selector/add_edit_userPermissions/add_user.php">
        <fieldset class="textbox">
            <input type="hidden" name="Proj" value="<?php echo $_GET['Proj']; ?>">
            <label class="username">
                <input name="name" type="text" placeholder="User ID">
            </label>
            <button class="submit button" type="submit">Add a new member to this project!</button>
        </fieldset>
    </form>
</div>