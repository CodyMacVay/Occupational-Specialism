<?php
session_start(); // Needs to be on each page of the website //

Echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
        echo "<meta charset='utf-8'>";
        echo "<link rel='stylesheet' href='css/style.css'>";
    echo "</head>";

    echo "<body>";
        require_once "assets/topbar.php";
         echo "<div class='container'>";
            echo "<p> Welcome to primary Oaks Surgery appointment system (V1) </p>";
            echo "<form action ='' method='post'>";
            echo "<input type='text' name='message' placeholder='Username'>";
            echo "<br>";
            echo "<input type='password' name='password' placeholder='Password'>";
            echo "<br>";
            echo "<input type='submit' name='submit' placeholder='Submit'>";

?>