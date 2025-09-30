<?php
echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>About</title>
        <link rel='stylesheet' href='CSS/style.css'>
    </head>
    <body>";

require "Assets/topbar.php";
require_once "Assets/nav.php";

echo "        
        <h1>About Us</h1>
        <p> We are a tutoring company who are wanting to help your children improve their education</p>
        <br>
        <h2>Meet the Tutors</h2>
        <div class='team'>
            <div class='team member'>
                <img src='images/tutor2.jfif' alt='Team Member 1'>
                <p>Rebekah<br>Maths Tutor</p>
            </div>
            <div class='team member'>
                <img src='images/tutor1.jfif' alt='Team member 2'>
                <p>Jane<br>Science Tutor</p>
            </div>
            <div class='team member'>
                <img src='images/tutor3.jfif' alt='Team member 3'>
                <p>Jimmy<br>English Tutor</p>
            </div>
        </div>
        <form action='index.php'>
            <button type='submit'> Home</button>
        </form>
    </body>";

require_once "Assets/bottombar.php";

echo "
</html>
";
?>