<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST") {


}

Echo "
    <!DOCTYPE html>
    <html>
    <head>
    <title>Occupational Specialism</title>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    </head>
    
   <body>
   <div class='container'>
";
require_once "assets/topbar.php";
require_once "assets/nav.php";

echo "
    <div id='content'>
        <h2>Session work</h2>
        <form method='post' action=''>
            <input type='text' name='message' placeholder='Message'>
            <input type='submit' name='submit' value='Submit'> <!-- take user input and store it on session where it will be outputted elsewhere -->
    </div>
    </div>
    </body>
    </html>
";
?>