<?php
session_start(); // Needs to be on each page of the website //

if (!isset($_GET["message"])){
    session_start();
    $message = false;
} else{
    // decodes the message for display
    $message = htmlspecialchars(urldecode($_GET["message"]));
}

require_once "assets/common.php";
require_once "assets/dbcon.php";

Echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
        echo "<title>Occupational Specialism</title>";
        echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
    echo "</head>";

   echo "<body>";
   echo "<div class='container'>";

require_once "assets/topbar.php";
require_once "assets/nav.php";

    echo "<div id='content'>";
        echo "<h1>Games are not fun and extremely addictive!</h1>";
        echo "<img id = 'main' src='images/main.jfif'>";
try {
    $conn = dbconnect_insert();
    echo"success";
}  catch (PDOException $e) {
    echo $e->getMessage();
}
    echo "</div>";

    echo "</div>";
    echo "</body>";
    echo "</html>";
?>
