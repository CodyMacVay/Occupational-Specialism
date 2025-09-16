<?php
session_start(); // Needs to be on each page of the website //

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
    </div>
    </div>
    </body>
    </html>
";
?>