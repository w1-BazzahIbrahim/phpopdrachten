
<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 3</title>
</head>
<body>
<?php
$message = "";
$aUsers = array ('Abu' => '123', 'Melih' => '666');

if (isset($_GET['submit'])) {
    //controleren ingevulde username en wachtwoord
    if ( $aUsers[ $_GET['username'] ]  == $_GET['password'] )  {
        //$message = "login ok";
        setcookie('username'
            , $_GET['username'],time()+86400);
        header('location: welkomcookie.php');
    }   else {
        $message = "Verkeerde gebruikersnaam en wachtwoord combinatie";
    }
}

echo "<h2>Login formulier</h2>";
echo
"<form method='get' action='opdracht6.2.php'>
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
";
?>
<?php
include '../../includes/footer.php';
?>
</body>
</html>