<?php
session_start();

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

            echo "<div id='main'>";
                echo "<h1>Password Strength Checker</h1>";
                echo "<p>Enter a password below to see how secure it is based on our rules.</p>";

                echo "<form method='post' action=''>";
                echo "<label for='pass'>Password:</label><br>";
                echo "<input type='password' name='pass' id='pass' placeholder='Enter your password' required>";
                echo "<br><br>";
                echo "<input type='submit' name='submit' value='Check Password'>";
                echo "</form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_password = $_POST['pass'];
    $_spec_char = '/[!@#$"£%^&*()_=+{};:,.<>]/';
    $_score = 0;
    $_total_rules = 9;

    echo "<h2>Results:</h2>";

    // Rule 1: Length greater than 8
    if (strlen($_password) > 8) {
        $_score++;
        echo "<p class='success'> Password length is greater than 8.</p>";
    } else {
        echo "<p class='fail'> Password must be longer than 8 characters.</p>";
    }

    // Rule 2: At least one uppercase
    if (preg_match('/[A-Z]/', $_password)) {
        $_score++;
        echo "<p class='success'> Contains at least one uppercase letter.</p>";
    } else {
        echo "<p class='fail'> Must contain at least one uppercase letter.</p>";
    }

    // Rule 3: At least one lowercase
    if (preg_match('/[a-z]/', $_password)) {
        $_score++;
        echo "<p class='success'> Contains at least one lowercase letter.</p>";
    } else {
        echo "<p class='fail'> Must contain at least one lowercase letter.</p>";
    }

    // Rule 4: At least one special character
    if (preg_match($_spec_char, $_password)) {
        $_score++;
        echo "<p class='success'> Contains at least one special character.</p>";
    } else {
        echo "<p class='fail'> Must contain at least one special character.</p>";
    }

    // Rule 5: At least one number
    if (preg_match('/[0-9]/', $_password)) {
        $_score++;
        echo "<p class='success'> Contains at least one number.</p>";
    } else {
        echo "<p class='fail'> Must contain at least one number.</p>";
    }

    // Rule 6: First character cannot be special char
    if (!preg_match($_spec_char, $_password[0])) {
        $_score++;
        echo "<p class='success'> First character is not a special character.</p>";
    } else {
        echo "<p class='fail'> First character cannot be a special character.</p>";
    }

    // Rule 7: Last character cannot be special char
    if (!preg_match($_spec_char, substr($_password, -1))) {
        $_score++;
        echo "<p class='success'> Last character is not a special character.</p>";
    } else {
        echo "<p class='fail'> Last character cannot be a special character.</p>";
    }

    // Rule 8: Cannot contain 'password'
    if (stripos($_password, 'password') === false) {
        $_score++;
        echo "<p class='success'> Does not contain the word 'password'.</p>";
    } else {
        echo "<p class='fail'> Cannot contain the word 'password'.</p>";
    }

    // Rule 9: First character cannot be a number
    if (!preg_match('/^[0-9]/', $_password)) {
        $_score++;
        echo "<p class='success'> First character is not a number.</p>";
    } else {
        echo "<p class='fail'> First character cannot be a number.</p>";
    }

    echo "<h3>Your password score: $_score / $_total_rules</h3>";
}

            echo "</div>"; // main
            echo "</div>"; // container
    echo "</body>";
echo "</html>";
?>
