<?php
echo "
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel='stylesheet' href='CSS/style.css'>
</head>
<body>
    <header>
        <img id='sign' src='images/signup.jpg' alt='Signup Banner'>
    </header>
    <nav>
        <a href='index.php'>Home</a>
        <a href='about.php'>About</a>
        <a href='contact.php'>Contact</a>
        <a href='signup.php'>Signup</a>
    </nav>
    <div class='section'>
        <h1>Signup Form</h1>
";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm = htmlspecialchars($_POST['confirm']);

    if ($password !== $confirm) {
        echo "<p style='color:red;'>Passwords do not match. Please try again.</p>";
    } else {
        $file = fopen('users.txt', 'a');
        fwrite($file, "Name: $name, Email: $email\n");
        fclose($file);

        echo "<p> Thank you for signing up, <strong>$name</strong>!</p>";
        echo "<div class='preview'>
                <h3>Your Info:</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
              </div>";
    }
}

echo "
    <form method='POST' action='signup.php'>
        <input type='text' name='name' placeholder='Your Name' required><br>
        <input type='email' name='email' placeholder='Your Email' required><br>
        <input type='password' name='password' placeholder='Password' required><br>
        <input type='password' name='confirm' placeholder='Confirm Password' required><br>
        <button type='submit'>Sign Up</button>
    </form>
    <form action='index.php'>
        <button type='submit'>Back to Home</button>
    </form>
    </div>
</body>
</html>
";
?>
