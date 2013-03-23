
            <?php                
        $mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");                      
        $l = $mysqli->query("SELECT * FROM project Where Project_ID=" . $_GET['Proj']);                        
        $l->data_seek(0);
        $k = $l->fetch_assoc();               
        ?>
        <div id="editProj-box" class="login-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
            <div align="right"><a href="#" class="close"><img src="http://176.31.108.26/rob/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
            <h1> Edit Project </h1>
            <form method="post" class="signin" action="http://176.31.108.26/rob/project_selector/edit_project/edit_milestone.php">
                    <fieldset class="textbox">

                        <label class="username">                                       
                            <span>Title: </span>                     
                            <input size="25" type="text" name="Title" value="<?php echo $k['Title'] ?>">
                        </label> 
                        <label class="username">                                       
                            <span>Description: </span>                     
                            <input size="25" type="text" name="Description" value="<?php echo $k['Description'] ?>">
                        </label> 

                                         
                        <input type="hidden" name="Proj" value="<?php echo $_GET['Proj']; ?>">           
                        <button class="submit button" type="submit">Edit Project!</button>              
                   </fieldset>
            </form>
        </div>