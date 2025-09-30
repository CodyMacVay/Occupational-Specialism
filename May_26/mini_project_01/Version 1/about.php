<?php
echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>About</title>
        <link rel='stylesheet' href='CSS/style.css'>
    </head>
    <body>
        <header>
            <img src='images/about.jpg' alt='About Banner'>
        </header>
        <nav>
            <a href='index.php'>Home</a>
            <a href='about.php'>About</a>
            <a href='contact.php'>Contact</a>
            <a href='signup.php'>Sign Up</a>
        </nav>
        <h1>About Us</h1>
        <p> This is a website to showcase my skills on mini project 01</p>
        <h2>My Mission</h2>
        <p> To Help others in my class extend their knowledge of web develpment</p>
        <br>
        <h2>Meet the Team</h2>
        <div class='team'>
            <div class='team member'>
                <img src='images/cody.jpg' alt='Team Member 1'>
                <p>Cody<br>Main Developer</p>
            </div>
            <div class='team member'>
                <img src='images/sean.jpg' alt='Team member 2'>
                <p>Sean<br>Junior Developer</p>
            </div>
            <div class='team member'>
                <img src='images/harris.jpg' alt='Team member 3'>
                <p>Harris<br>Full time janitor</p>
            </div>
        </div>
        <form action='index.php'>
            <button type='submit'> Home</button>
        </form>
    </body>
    </html>
";
?>