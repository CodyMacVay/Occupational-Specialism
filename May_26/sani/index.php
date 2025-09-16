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

            echo "<h2>Sani</h2>";

            if($_SERVER['REQUEST_METHOD'] === 'POST') {

                $_POST['message'];
                $_POST['email'];
                $_POST['url'];
            }
            echo "<form method='post' action=''>";
            echo "<input type='text' name='message' placeholder='Message'>";
            echo "<br>";
            echo "<input type'email' name='email' placeholder='Email'>";
            echo "<br>";
            echo "<input type='url' name='url' placeholder='URL'>";
            echo "<br>";
            echo "<input type='submit' name='submit' value='Send'>";

            echo "</div>";
        echo "</div>";
    echo "</body>";
    echo "</html>";
?>