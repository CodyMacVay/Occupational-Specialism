<?php

$correct_password = "MySecurePass123";

// Start session to remember login
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_password = $_POST["password"];

    if ($input_password === $correct_password) {
        $_SESSION["authenticated"] = true;
    } else {
        $error = "Incorrect password!";
    }
}



echo "<!DOCTYPE>";
    echo "<html>";

        echo "<head>";
            echo "<title> Password checker </title>";
            echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
        echo "</head>";

    echo "<body>";
        echo "<div class='container'>";

            require_once "assets/topbar.php";
            require_once "assets/nav.php";

        echo "<div class='content'>";
        echo "<h2>Please Enter Password</h2>";

            if (isset($error)) echo "<p style='color:red;'>$error</p>";

        echo "<form method='POST'>";
        echo "<input type='password' name='password' required>";
        echo "<button type='submit'>Login</button>";

        echo "<footer>";
            echo "<p>EMAIL: password@example.com</p> ";
            echo "<p>TEL: +44 112223333</p>";
        echo "</footer>";
        echo "</div>";
        echo "</div>";
    echo "</body>";
echo "</html>";

?>