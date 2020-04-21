<?php
/**
 * User: Ibrahim Bazzah
 * Date: 15-04-2020
 * Time: 22:41
 * File: 3.2.php
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../../css/stylesheet.css" rel="stylesheet" type="text/css">
    <title>
        Index
    </title>
</head>
<body>
<?php
include("../../Include/header.php");
?>
<aside>
    <div id="list">
        <h2>
            Menu
        </h2>
        <?php
        include("../../Hoofdstuk 4/Huiswerk/script4.3.php");
        ?>
        <ul>
            <li>
                Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../../Hoofdstuk%202/2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%202/Huiswerk/2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
                Hoofdstuk 3
                <ul>
                    <li>
                        <a href="../../Hoofdstuk%203/Huiswerk/3.1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%203/Huiswerk/3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%203/Huiswerk/3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
                Hoofdstuk 4
                <ul>
                    <li>
                        <a href="../../Hoofdstuk%204/Huiswerk/4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%204/Huiswerk/4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%204/Huiswerk/4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%204/Huiswerk/4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
                Hoofdstuk 5
                <ul>
                    <li>
                        <a href="../../Hoofdstuk%205/Huiswerk/5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%205/Huiswerk/5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%205/Huiswerk/5.3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%205/Huiswerk/5.4.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<main id="wrapper">
    <div id="uitwerking">
        <h2 id="uitwerking2">
            Uitwerking

    <form action="5.4.php" method="post">
        <table>
            <tr>
                <td>
                    <p>Komt er een ambulance aan?</p>
                </td>
                <td>
                    <input type="radio" name="ambulanceComing" value="yes" >ja
                    <input type="radio" name="ambulanceComing" value="no" >nee

                </td>
            </tr>
            <tr>
                <td> Kleur stoplicht </td>
                <td>
                    <?php
                    //Bestaat $_post["trafficLightColor"] ? ZO ja, voer de 2e if statement uit
                    if($_SERVER["REQUEST_METHOD"] == "POST" )
                    {
                        // Bepaal of de trafficLightColor geldige waardes heeft
                        if(isset($_POST["trafficLightColor"]) == false )
                        {
                            echo("<p style='color: red'> U heeft een ongeldige invoer gegeven </p>");
                        }
                    }
                    ?>
                    <br>

                    <input type="radio" name="trafficLightColor" value="green">groen
                    <input type="radio" name="trafficLightColor" value="orange">oranje
                    <input type="radio" name="trafficLightColor" value="red">rood
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Versturen">
                </td>

            </tr>



        </table>
    </form>

    <?php
    if(isset($_POST["ambulanceComing"]) == true && isset($_POST["trafficLightColor"]) == true)
    {
        echo("<h1> wat is de situatie en wat moet ik doen?</h1>");
        echo("<table>");

        if($_POST["trafficLightColor"] == "green")
        {
            echo("<p>Het stoplicht staat op groen</p>");
        }
        elseif($_POST["trafficLightColor"] == "orange")
        {
            echo("<p>Het stoplicht staat op oranje</p>");
        }
        if($_POST["trafficLightColor"] == "red")
        {
            echo("<p>Het stoplicht staat op rood</p>");
        }

        //Tonen of er een ambulance aankomt
        echo("<p> En er komt een ambulance aan:" . $_POST["ambulanceComing"] . "</p>");

        //mag ik verder rijden?
        if($_POST["trafficLightColor"] == "green" && $_POST["ambulanceComing"] == "no")
        {
            echo("<p style='color: green'>Je mag doorrijden</p> ");
        }
        else
        {
            echo("<p style='color: red'>Je moet stoppen</p> ");
        }
        echo("</table>");


    }


    ?>
</main>
<footer>
    <?php

    include("../../Include/footer.php");
    ?>
</footer>
</body>
</html>
