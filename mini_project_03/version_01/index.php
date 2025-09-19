<?php

echo "<!DOCTYPE>";
echo "<html>";

echo "<head>";
    echo "<title> Password checker </title>";
    echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
echo "</head>";

echo "<body>";
    echo "<div class='container'>";

    require_once "assets/topbar.php";
    require_once "assets/nav.php";

    echo "<div class='content'>";
        echo "<h2>Password Strength Checker  Our password checker helps you create a stronger,   
                   more secure password in real time. As you type, it analyzes your password for length, 
                   complexity, and uniqueness. You’ll get instant feedback on whether your password is weak, 
                   moderate, or strong, along with suggestions for making it more secure.
                   Protect your accounts by testing your passwords before you use them your security starts here.</h2>";
    echo "</div>";
        echo "<footer>";
            echo "<p>EMAIL: password@example.com</p> ";
            echo "<p>TEL: +44 112223333</p>";
        echo "</footer>";
    echo "</div>";
    echo "</body>";
    echo "</html>";

?>