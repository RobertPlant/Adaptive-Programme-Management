<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../../styles/login/login.css" type="text/css" media="screen" />
           <script type="text/javascript">
                $(document).ready(function() {
                        $('a.addproj-window').click(function() {

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
                        $('#mask , .addproj-popup').fadeOut(300 , function() {
                                $('#mask').remove();  
                        }); 
                        return false;
                        });
                });
            </script>
            
        <title></title>
    </head>
    <body>

        <div id="addproj-box" class="addproj-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
            <div align="right"><a href="#" class="close"><img src="http://176.31.108.26/rob/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
            <h1> Add Project </h1>
            <form method="post" class="signin" action="http://176.31.108.26/rob/project_selector/add_project/add_proj.php">
                    <fieldset class="textbox">

                        <label class="username">                                       
                            <span>Title: </span>                     
                            <input size="25" type="text" name="Title" value="<?php echo $k['Title'] ?>">
                        </label> 
                        <label class="username">                                       
                            <span>Description: </span>                     
                            <input size="25" type="text" name="Description" value="<?php echo $k['Description'] ?>">
                        </label> 
                        
                                 
                        <button class="submit button" type="submit">Add Project!</button>              
                   </fieldset>
            </form>
        </div>
    </body>
</html>
