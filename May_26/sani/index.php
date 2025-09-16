<?php

session_start(); // Needs to be on each page of the website //

require_once "assets/common.php";

Echo "<!DOCTYPE html>";
    echo "<html>";

    echo "<head>";
        echo "<title>Occupational Specialism</title>";
        echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
    echo "</head>";

    echo "<body>";
        echo "<div class='container'>";

            require_once "assets/nav.php";

            echo "<div id='content'>";
    echo usr_msg();

            echo "<h2> Sani </h2>";


            echo "<form method='post' action=''>";
            echo "<input type='text' name='message' placeholder='Message' required>";
            echo "<br>";
            echo "<input type='email' name='email' placeholder='Email' required>";
            echo "<br>";
            echo "<input type='url' name='url' placeholder='URL' required>";
            echo "<br>";
            echo "<input type='submit' name='submit' value='Send'>";
            echo "<br>";
            echo "<br>";
            echo "</form>";
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "Your Name:" . $_POST['message'];
    echo "<br>";
    echo "Your Email: " . $_POST['email'];
    echo "<br>";
    echo "<p id = 'purl'> URL: ".$_POST['url']."</p>";
}
            echo "</div>";
        echo "</div>";
    echo "</body>";
    echo "</html>";
?>