<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="styles/default.css"  type="text/css"/>
    <link rel="stylesheet" href="styles/slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/slider/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/login/login.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
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
                <img src="images/slider/1.png" />
                <img src="images/slider/3.png" />
                <img src="images/slider/4.png" />
                <img src="images/slider/5.png" />
                <img src="images/slider/6.png" />
                <img src="images/slider/7.png" />
            </div>
        </div>
    </div>
    <table>
        <tr>
            <td>
                <div class="boxtitle">UPDATES</div>
                <div id="updates">
                    <b>Changes that have been made to the system consist of;</b>
                    <p>Ability to add adtiional milestones has been added</p>
                    <p>Ability to change current milestones has been added</p>
                </div>
            </td>
            <td>
                <div class="boxtitle">ABOUT US</div>
                <div id="aboutus">
                    <p>Adaptive Programme Management has been designed to be a suitable replacement for
                    users when dealing with projects, this system enables the user to create a project and to
                    manage it to completion</p>
                </div>
            </td>
        </tr>
    </table>
</body>
