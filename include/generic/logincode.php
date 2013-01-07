<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../../styles/default.css" />
        <script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
        <script src="../../js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../../styles/slider/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../styles/slider/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../styles/login/login.css" type="text/css" media="screen" />
        <script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
        <link rel="stylesheet" href="../../styles/login/login.css" type="text/css" media="screen" />
           <script type="text/javascript">
                $(document).ready(function() {
                        $('a.login-window').click(function() {

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
                        $('#mask , .login-popup').fadeOut(300 , function() {
                                $('#mask').remove();  
                        }); 
                        return false;
                        });
                });
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                        $('a.newuser-window').click(function() {

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
                        $('#mask , .newuser-popup').fadeOut(300 , function() {
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
            $val = Null;
        
        IF (array_key_exists('u', $_REQUEST))
        {
            if ($_REQUEST['u'] == "u")
            {
                $val = "Someone already has this account name, please try another";
            }
        }

        IF (array_key_exists('l', $_REQUEST))
        {
            if ($_REQUEST['l'] == "n")
            {
                $val = "Please try your details again";
            }
            elseif ($_REQUEST['l'] == "y")
            {
                $val = "Thank you for logging in";
            }
            elseif ($_REQUEST['l'] == "u")
            {
                $val = "Username not found";
            }
            elseif ($_REQUEST['l'] == "c")
            {
                $val = "Account Created";
            }
        }
        
        IF ($val != NULL)
        {
            echo '<div id="error">' . $val . "</div>";
        }
        ?>
        <div id="login-box" class="login-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
            <div align="right"><a href="#" class="close"><img src="http://localhost/testing/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
            <h1> Login </h1>
            <form method="post" class="signin" action="http://localhost/testing/login/login.php">
                    <fieldset class="textbox">
                    <label class="username">
                        <span>Username</span>
                        <input  name="User_ID" value="" type="text" autocomplete="on" placeholder="Username">
                    </label>

                    <label class="password">
                        <span>Password</span>
                        <input  name="Password" value="" type="password" placeholder="Password">
                    </label>

                    <button class="submit button" type="submit">Sign In!</button>              

                    </fieldset>
            </form>
        </div>



        <div id="newuser-box" class="newuser-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
            <div align="right"><a href="#" class="close"><img src="http://localhost/testing/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a></div>
            <h1> New User </h1>
            <form method="post" class="signin" action="http://localhost/testing/login/add_user.php">
                    <fieldset class="textbox">
                    <label class="username">
                        <span>Username</span>
                        <input  name="User_ID" value="" type="text" autocomplete="on" placeholder="Username">
                    </label>

                    <label class="password">
                        <span>Password</span>
                        <input name="Password" value="" type="password" placeholder="Password">
                    </label>

                    <button class="submit button" type="submit">Sign Up!</button>              

                    </fieldset>
            </form>
        </div>
    </body>
</html>
