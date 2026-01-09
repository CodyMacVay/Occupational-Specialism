<?php

session_start();

require_once "assets/common.php";

echo "<!DOCTYPE html>";

echo "<html>";
    echo "<head>";
        echo "<title>Home Asset Management system</title>";
        echo "<link rel='stylesheet' type='text/css' href='css/styles.css'>";
    echo "</head>";

    echo "<body>";
        echo "<div class='container'>";

        require_once "assets/topbar.php";
        require_once "assets/nav.php";

        echo "<div class='content'>";

echo "<h2> Welcome to House management!</h2>";  # sets a h2 heading as a welcome

echo "<p class='content'>A House Management System is a centralized platform designed to manage residents, facilities, and daily operations within a residential property. It streamlines record-keeping, maintenance tracking, and communication, improving efficiency, transparency, and overall property management.
 </p>";

echo "<p class='content'> You have to be registered to login and manage a household</p>";

echo "<br>";

echo usermessage();

echo "</div>";

echo "</div>";

echo "</body>";

echo "</html>";
?>