<?php

session_start();

require_once "assets/dbcon.php";
require_once "assets/common.php";

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    try{
        new_console(dbconnect_insert(), $_POST);
        $_SESSION['usermessage'] = "SUCCESS: Console created";
        auditor(dbconnect_insert(), $_SESSION['userid'], "ccr", "Console has been successfully registered ");
    } catch(PDOException $e){
        $_SESSION['usermessage'] = $e->getMessage();
    }
}

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<title>Password Strength Checker</title>";
echo "<link rel='stylesheet' href='css/style.css'>";
echo "</head>";

require_once 'assets/topbar.php';
require_once 'assets/nav.php';

if (!isset($_SESSION['user'])) {//checks if user is already logged in if so it directs you to the index page
    $_SESSION['usermessage'] = "You need to login first";
    header('Location: login.php'); //headers only work if no content has loaded on the page
    exit; //by forcing the exit it stops anything from being loaded before redirecting, allowing redirection
}

echo "<body>";
echo "<div class='container'>";

echo "<div class='content'>";
echo "<h1>Register a Console</h1>";
echo "<p>Enter Console Details</p>";
echo "<br>";

echo user_message();

echo "<br>";

    echo "<form actiom='' method='post'>";
    echo "<br>";
    echo"<input type='text' name='manufacturer' placeholder='Manufacturer'>";
    echo "<br>";
    echo"<input type='text' name='c_name' placeholder='Console Name'>";
    echo "<br>";
    echo"<input type='text' name='release_date' placeholder='Release Date'>";
    echo "<br>";
    echo "<input type='text' name='controller_no' placeholder='Controller Number'>";
    echo "<br>";
    echo "<input type='text' name='bit' placeholder='Number of Bits'>";
    echo "<br>";
    echo "<input type='submit' name='Register' value='Submit'>";

echo "</div>";
echo "</div>";

?>
