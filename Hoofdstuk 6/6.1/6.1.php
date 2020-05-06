
<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../../Index/index.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 3</title>
</head>
<body>
<?php
$message = " ";
$aUsers = array ('Abu' => '123', 'ibrahim' => '666');

if (isset($_GET['submit'])) {
    //controleren ingevulde username en wachtwoord
    if ( $aUsers[ $_GET['username'] ]  == $_GET['password'] )  {
        //$message = "login ok";
        $_SESSION['username'] = $_GET['username'];
        header('location: welkom.php');
    }   else {
        $message = "Verkeerde gebruikersnaam en wachtwoord combinatie";
    }
}

echo "<h2>Login formulier</h2>";

echo
"<form method='get' action='welkom.php'>
                <table>
                    <tr>
                        <td><label>Username</label></td>
                        <td><input type='text' name='username'></td>
                    </tr>
                    <tr>
                        <td><label>Password</label></td>
                        <td><input type='password' name='password'></td>
                    </tr>
                    <tr>
                        <td><input type='submit' name='submit' value='login' class='btn'></td>
                        <td id='message'>$message</td>
                    </tr>               
                </table> 
                </form> 
";
?>
</body>
</html>
