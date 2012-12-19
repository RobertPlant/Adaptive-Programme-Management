<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/default.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        
    </head>
    <body>
       <div align="middle">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <h1>Create an Account</h1><br/>

        <?php
            IF (array_key_exists('u', $_REQUEST))
            {
                if ($_REQUEST['u'] == "u")
                {
                    echo "Someone already has this account name, please try another";
                }
            }
        ?>
        
        <form name="input" action="add_user.php" method="post">
            <table spacing="0" padding="2">
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
            <input type="submit">
        </form>
       </div
    </body>
</html>
