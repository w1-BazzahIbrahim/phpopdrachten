<?php
/** User: Naam ... */

?>

<!doctype HTML>
<html>
<head>

</head>
<body>

<?php
    // Instructie 1 Hoofdstuk 4
    // Vertellen dat ons script de tijdzones van Hong Kong moet aanhouden
    date_default_timezone_set(  "Asia/Hong_Kong");

    // Toon de tijd in HH:MM formaat
$currentTime = date( "D-Y-m-d-H:i:s");
    echo ("<p>Huidige tijd: " . $currentTime . "</p>");

    //Oefening 2: switch
    $currentHour = date( "D");

    switch ($currentHour)
    {
        case "Mon":
            echo("Het is maandag");
            break;
        case "Tue":
            echo ("Het is dinsdag");
            break;
        case "Wed":
            echo("Het is Woensdag");
            break;
        case "Thu":
            echo ("Het is donderdag");
            break;
        case "Fri":
            echo ("Het is vrijdag");
            if ($name == "Ron")
            {
                // Do stuff
            }
            break;
        default:
            // Code voor "else" komt hier
            echo ("Yo, deze dag ken ik niet");
    }
?>
</body>



</html>
