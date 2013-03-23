<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../../styles/default.css" />
        <script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
        <link rel="stylesheet" href="../../styles/login/login.css" type="text/css" media="screen" />
           <script type="text/javascript">
                $(document).ready(function() {
                        $('a.editproj-window').click(function() {

                                // Getting the variable's value from a link 
                                var loginBox = $(this).attr('href');

                                //Fade in the Popup and add close button
                                $(loginBox).fadeIn(300);

                                //Set the center alignment padding + border
                                var popMargTop = ($(loginBox).height() + 24) / 2; 
                                var popMargLeft = ($(loginBox).width() + 24) / 2; 

                                $(loginBox).css({ 
                                        'margin-top' : -popMargTop,
                                        'margin-left' : -popMargLeft
                                });

                                // Add the mask to body
                                $('body').append('<div id="mask"></div>');
                                $('#mask').fadeIn(300);

                                return false;
                        });

                        // When clicking on the button close or the mask layer the popup closed
                        $('a.close, #mask').live('click', function() { 
                        $('#mask , .editproj-popup').fadeOut(300 , function() {
                                $('#mask').remove();  
                        }); 
                        return false;
                        });
                });
            </script>
            
        <title></title>
    </head>
    <body>
            <?php                
        $mysqli = new mysqli("localhost", "eggsdb", "eggsdb", "ada_prog_man");                      
        $l = $mysqli->query("SELECT * FROM project Where Project_ID=" . $_GET['Proj']);                        
        $l->data_seek(0);
        $k = $l->fetch_assoc();               
        ?>
        <div id="editproj-box" class="editproj-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
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
    </body>
</html>
