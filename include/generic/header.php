<?php session_start() ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Adaptive Programme Management">
<meta name="author" content="Robert Plant">
<script src="http://176.31.108.26/rob/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="http://176.31.108.26/rob/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://176.31.108.26/rob/styles/default.css"  type="text/css"/>
<link rel="stylesheet" href="http://176.31.108.26/rob/styles/slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://176.31.108.26/rob/styles/slider/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://176.31.108.26/rob/styles/login/login.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://176.31.108.26/rob/styles/default.css"  type="text/css"/>
<link rel="icon" href="include/favicon.ico">

</head>
<body>
    <div id="dots"> </div>
    <div id="fullwidth" >
        <table>
            <tr>
                <td>
                    <div class="headertext">
                        <h1><a href="http://176.31.108.26/rob/" title="Back to Home.">Adaptive<br />Programme<br/>Management</a></h1>
                    </div>
                </td>
                <td>
                    <div class="headernav">
                        <ul>
                            <li><a href="#login-box" class="login-window">LOGIN</a></li> 
                            <li><a href="#newuser-box" class="newuser-window">NEW USER</a></li>      
                            <li><a href="http://176.31.108.26/rob/project_selector/index.php">PROGRAMME</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </div>    
    <?php
    include 'logincode.php';
    ?>
</body>