<?php  // Starts the php
// Uses echo to run the html
echo " 
<!DOCTYPE html>  <!--Declares the document as HTML --> 
<html>
<head>
    <title>Home</title>
    <link rel='stylesheet' href='CSS/style.css'>  <!-- Connects external css for styling -->
</head>
<body>
    <header>
        <img src='images/home.jpg' alt='Home Banner'>  <!--Image to display in the header of the home page. -->
    </header>
    <nav>
        <a href='index.php'>Home</a>  <!-- Link to Home page. -->
        <a href='about.php'>About</a> <!-- Link to About page. -->
        <a href='contact.php'>Contact</a> <!-- Link to Contact page. -->
        <a href='signup.php'>Signup</a> <!-- Link to signup page. -->
    </nav>

<!-- Main Content -->
    <div class='section'>
        <h1>Welcome To My Website</h1>
        <!-- Features section -->
        <div class='features'>
            <div class='feature'>
                <img src='images/test.jpg' alt='Testing my knowledge'>
                <h3>Test</h3>
                <p>This is my website to showcase my work and what I have learnt so far </p>
            </div>
            <div class='feature'>
                <img src='images/echo.png' alt='Echo Statement'>
                <h3>Echo</h3>
                <p>We are learning to use echo to create a faster and easier way </p>
            </div>
            <div class='feature'>
                <img src='images/CSS.png' alt='CSS Knowledge'>
                <h3>CSS</h3>
                <p>We try to use CSS to the best of our knowledge:)</p>
            </div>
        </div>
        <!-- Call to action section -->
        <div class='cta'>
            <p>Create your account now</p>  <!-- Motivation text to signup --> 
            <form action='signup.php'>  <!-- Redirects you to the signup.php page --> 
                <button type='submit'>Sign Up Now</button> <!-- Creates a button to use to redirect you to that signup.php page -->
            </form>
        </div>
    </div>
</body>
</html>
";
?>

