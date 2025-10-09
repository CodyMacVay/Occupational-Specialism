<?php
session_start();

require_once "assets/dbcon.php";
require_once "assets/common.php";

if (isset($_SESSION['user'])) {//checks if user is already logged in if so it directs you to the index page
    $_SESSION['usermessage'] = "You are already logged in";
    header('Location: index.php'); //headers only work if no content has loaded on the page
    exit; //by forcing the exit it stops anything from being loaded before redirecting, allowing redirection
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usr = login(dbconnect_insert(), $_POST["username"]);

    if ($usr && password_verify($_POST['password'], $usr['password'])) {
        $_SESSION['user'] = true;
        $_SESSION['userid'] = $usr['user_id'];
        $_SESSION['usermessage'] = "You are logged in";
        auditor(dbconnect_insert(), $_SESSION['userid'], "log", "User has successfully logged in ");
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['usermessage'] = "Incorrect password";
        header('Location: login.php');
        exit;
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
echo "<h1>Login</h1>";
echo "<p>Enter your login details</p>";
    echo "<form actiom='' method='post'>";
    echo"<input type='text' name='username' placeholder='Username'>";
    echo "<br>";
    echo"<input type='password' name='password' placeholder='Password'>";
    echo "<br>";
    echo "<input type='submit' name='submit' value='Login'>";

echo "</div>";
echo "</div>";

?>