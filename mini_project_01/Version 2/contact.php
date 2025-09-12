<?php
echo "
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel='stylesheet' href='CSS/style.css'>
</head>
<body>";

require "Assets/topbar.php";
require_once "Assets/nav.php";

echo"    
    <div class='section'>
        <h1>Contact Us</h1>
        <p>Feel free to reach out using the form below.</p>

        <form method='POST' action=''>
            <input type='text' name='name' placeholder='Your Name' required><br>
            <input type='email' name='email' placeholder='Your Email' required><br>
            <input type='text' name='subject' placeholder='Subject'><br>
            <textarea name='message' rows='4' cols='40' placeholder='Your Message' required></textarea><br>
            <button type='submit'>Send Message</button>
        </form>

        <div class='contact-info'>
            <p><strong>Email:</strong> itsupport@gmail.com</p>
            <p><strong>Phone:</strong> +44 111 222 3333</p>
            <p><strong>Location:</strong> Leeds, UK</p>
            <p><strong>Hours:</strong> Mon - Fri, 9am - 5pm</p>
        </div>

        <div class='social-links'>
            <a href='https://twitter.com'><img src='images/twitter.png' alt='Twitter'></a>
            <a href='https://facebook.com'><img src='images/facebook.png' alt='Facebook'></a>
            <a href='https://instagram.com'><img src='images/instagram.jpg' alt='Instagram'></a>
        </div>
    </div>
    <form action='index.php'>
        <button type='submit'>Go to Home</button>
    </form>
</body>
</html>
";
?>
