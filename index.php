<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
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
 
    <title>Adaptive Programme Management</title>  
</head>
<body>
    
    <?php
        include 'include/generic/header.php';
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
</body>
