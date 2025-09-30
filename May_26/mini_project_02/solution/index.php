<?php  // Starts the php
// Uses echo to run the html
echo " 
<!DOCTYPE html>  <!--Declares the document as HTML --> 
<html>
<head>
    <title>Home</title>
    <link rel='stylesheet' href='CSS/style.css'>  <!-- Connects external css for styling -->
</head>
<body>";

require_once "Assets/topbar.php";
require_once 'Assets/nav.php';

echo "
<!-- Main Content -->
    <div class='section'>
        <h1>GibJohn Tutoring</h1>
        <!-- Features section -->
        <div class='features'>
            <div class='feature'>
                <img src='images/maths.jfif' alt='Maths'>
                <h3>Maths</h3>
                <p>Here to learn all about numbers and how fun they are </p>
            </div>
            <div class='feature'>
                <img src='images/science.jfif' alt='Plants'>
                <h3>Science</h3>
                <p>Learn all about plants and how they work </p>
            </div>
            <div class='feature'>
                <img src='images/english.jfif' alt='Jane Austen'>
                <h3>English</h3>
                <p>Learn to be a better auther than Jane Austen </p>
            </div>
        </div>
        <!-- Call to action section -->
        <div class='cta'>
            <p>Sign your child upm, now</p>  <!-- Motivation text to signup --> 
            <form action='signup.php'>  <!-- Redirects you to the signup.php page --> 
                <button type='submit'>Sign Up Now</button> <!-- Creates a button to use to redirect you to that signup.php page -->
            </form>
        </div>
    </div>
</body>";

require_once "Assets/bottombar.php";

echo "
</html>
";
?>

