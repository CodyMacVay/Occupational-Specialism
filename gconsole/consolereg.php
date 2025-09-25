<?php
session_start();

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<title>Password Strength Checker</title>";
echo "<link rel='stylesheet' href='css/style.css'>";
echo "</head>";

echo "<body>";
echo "<div class='container'>";
require_once 'assets/topbar.php';
require_once 'assets/nav.php';

echo "<div class='content'>";
echo "<h1>Register a Console</h1>";
echo "<p>Enter Console Details</p>";
    echo "<form actiom='' method='post'>";
    echo "<br>";
    echo"<input type='text' name='Manufacturer' placeholder='Manufacturer'>";
    echo "<br>";
    echo"<input type='text' name='cname' placeholder='Console Name'>";
    echo "<br>";
    echo"<input type='text' name='released' placeholder='Release Date'>";
    echo "<br>";
    echo "<input type='text' name='cnumber' placeholder='Controller Number'>";
    echo "<br>";
    echo "<input type='text' name='bit' placeholder='Number of Bits'>";
    echo "<br>";
    echo "<input type='submit' name='Register' value='Submit'>";

echo "</div>";
echo "</div>";

?>
