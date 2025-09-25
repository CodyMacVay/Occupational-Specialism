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
echo "<h1>Register</h1>";
echo "<p>Enter your details</p>";
    echo "<form actiom='' method='post'>";
    echo"<input type='text' name='username' placeholder='Username'>";
    echo "<br>";
    echo"<input type='password' name='password' placeholder='Password'>";
    echo "<br>";
    echo"<input type='text' name='signup' placeholder='Sign_Up_Date'>";
    echo "<br>";
    echo "<input type='text' name='d.o.b' placeholder='D.O.B'>";
    echo "<br>";
    echo "<input type='text' name='country' placeholder='Country'>";
    echo "<br>";
    echo "<input type='submit' name='Register' value='Register'>";

echo "</div>";
echo "</div>";

?>
