<?php
session_start();

require_once "assets/common.php"; //requires these files to run, if they are not present it will not run
require_once "assets/dbcon.php"; //requires these files to run, if they are not present it will not run

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if(!only_user(dbconnect_insert(), $_POST["username"])){

        if (reg_user(dbconnect_insert(),$_POST)){
            $_SESSION["usermessage"] = "user created successfully";
        } else{
            $_SESSION["usermessage"] = "user creation failed";
        }
    } else {
        $_SESSION["usermessage"] = "user already exists";
    }
}

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
