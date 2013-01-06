<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    <script src="scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" href="styles/slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/slider/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/login/login.css" type="text/css" media="screen" />
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect: 'random',
                randomStart: true
            });
        });
    </script>
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
    <title>Adaptive Programme Management</title>  
</head>
<body>
    <?php
        include 'include/header.php';
    ?>
    <div id="slidercontainer">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/nemo.jpg" alt width="500"  />
                <img src="images/up.jpg" alt=""/>
                <img src="images/walle.jpg" alt="" title="This is an example of a caption" />
                <img src="images/toystory.jpg" alt="" />
            </div>
        </div>
    </div>
    <table>
        <tr>
            <td>
                <div class="boxtitle">UPDATES</div>
                <div id="updates">
                    Hello

                </div>
            </td>
            <td>
                <div class="boxtitle">ABOUT US</div>
                <div id="aboutus">
                    Hey!

                </div>
            </td>
        </tr>
    </table>
    
        <?php
            IF (array_key_exists('l', $_REQUEST))
            {
                if ($_REQUEST['l'] == "n")
                {
                    echo "Please try your details again";
                }
                elseif ($_REQUEST['l'] == "y")
                {
                    echo "Thank you for logging in";
                }
                elseif ($_REQUEST['l'] == "u")
                {
                    echo "Username not found";
                }
                elseif ($_REQUEST['l'] == "c")
                {
                    echo "Account Created";
                }
            }
        ?>

<div id="login-box" class="login-popup" style="display: none; margin-top: -116px; margin-left: -132px;">
        <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a>
          <form method="post" class="signin" action="login/login.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="User_ID" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="Password" value="" type="password" placeholder="Password">
                </label>
                
                <button class="submit button" type="submit">Sign in</button>              
<!--                <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>-->
                
                </fieldset>
          </form>
		</div>
</body>
