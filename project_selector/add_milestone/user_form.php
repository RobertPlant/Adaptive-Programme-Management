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
                        $('a.newactiv-window').click(function() {

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
                        $('#mask , .newactiv-popup').fadeOut(300 , function() {
                                $('#mask').remove();  
                        }); 
                        return false;
                        });
                });
            </script>
            
        <title></title>
    </head>
    <body>
        <div id="newactiv-box" class="newactiv-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
            <div align="right"><a href="#" class="close"><img src="http://176.31.108.26/rob/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
            <h1> New Milestone </h1>
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
    </body>
</html>
