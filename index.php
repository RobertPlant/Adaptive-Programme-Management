<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Adaptive Programme Management</title>
</head>
<body>
    <?php
        include 'include/header.php';
    ?>
    <div id="container">
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
        <form name="input" action="login/login.php" method="post">
            <table >
                <tr>
                    <td>
                        User name: 
                    </td>
                    <td>
                        <input size="25"  type="text" name="User_ID">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password: 
                    </td>
                    <td>
                        <input size="25" type="password" name="Password">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Submit"><br/>
            <a href="login/new_user.php">New User</a>

            <a href="project_selector/index.php">Index</a>
        </form>
    </div>
</body>
