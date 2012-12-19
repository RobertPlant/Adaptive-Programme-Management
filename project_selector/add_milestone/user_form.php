<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../styles/default.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        
    </head>
    <body>
       <div align="middle">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <h1>Create a Milestone</h1><br/>
        
        <form name="input" action="add_milestone.php" method="post">
            <table spacing="0" padding="2">
                <tr>
                    <td>
                        Associated Project: 
                    </td>
                    <td>
                        <input size="25"  type="text" name="Project_ID">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date From: 
                    </td>
                    <td>
                        <input size="25" type="date" name="low">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Till: 
                    </td>
                    <td>
                        <input size="25" type="date" name="y">
                    </td>
                </tr>
                <tr>
                    <td>
                        Activity: 
                    </td>
                    <td>
                        <input size="25" type="text" name="activity">
                    </td>
                </tr>
                <tr>
                    <td>
                        Critical Activity: 
                    </td>
                    <td>
                        <input size="25" type="text" name="criticalActivity">
                    </td>
                </tr>
                <tr>
                    <td>
                        criticals: Numbers?
                    </td>
                    <td>
                        <input size="25" type="text" name="criticals">
                    </td>
                </tr>
                <tr>
                    <td>
                        Phase: 
                    </td>
                    <td>
                        <input size="25" type="text" name="phase">
                    </td>
                </tr>
                <tr>
                    <td>
                        Vendor: 
                    </td>
                    <td>
                        <input size="25" type="text" name="vendor">
                    </td>
                </tr>
                <tr>
                    <td>
                        Colour: hex code
                    </td>
                    <td>
                        <input size="25" type="text" name="color">
                    </td>
                </tr>
                
            </table>
            <input type="submit">
        </form>
       </div
    </body>
</html>
