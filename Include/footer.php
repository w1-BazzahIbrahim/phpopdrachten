<?php
    /**
     * User: Ibrahim Bazzah
     * Date: Date
     * Time: Time
     * File: File
     */
?>

<?php
    include("variabelen.php");
    date_default_timezone_set("Europe/Amsterdam"); // Aanmaken timezone
    echo("<div class='footer'>"); // Aanmaken div
    echo("&copy;" . $year . " "); // copyright teken / variabel aanroepen van variabelen.php / spatie toevoegen
    echo($name); // variabel aanroepen van variabelen.php
    echo(" "); // Spatie toevoegen
    $uur = date("H"); // Aanmaken variabel met date format hour
    echo(" "); // Spatie toevoegen
    if($uur >= 0 && $uur < 5) // Aanmaken if / Else condities met echo's die erin moet worden gezet
    {
        echo("<p>Goedennacht</p>"); // Tekst die ge-echo'ed moet worden
    }
    else if($uur >= 5 && $uur < 12)
    {
        echo("<p>Goedenochtend</p>"); // Tekst die ge-echo'ed moet worden
    }
    else if($uur >= 12 && $uur < 17)
    {
        echo("<p>Goedenmiddag</p>"); // Tekst die ge-echo'ed moet worden
    }
    else if($uur >= 17 && $uur <= 24)
    {
        echo("<p>Goedenavond</p>"); // Tekst die ge-echo'ed moet worden
    }
    else
    {
        echo("<p>Deze tijd bestaat niet</p>"); // Tekst die ge-echo'ed moet worden
    }
    echo("</div>"); // Aanmaken einde div


?>

