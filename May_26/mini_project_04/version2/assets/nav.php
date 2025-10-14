<?php

echo "<div class='nav'>";
echo "<nav>";
echo "<ul>";
echo "<li> <a href='index.php'>Home</a> </li>"; // Link to Home page.

if(!isset($_SESSION['user'])) {
    echo "<li> <a href = 'login.php'>Login</a> </li>";
    echo "<li> <a href='register.php'>Register</a> </li>";
} else {
    echo "<li> <a href='book.php'>Make a Booking</a> </li>";
    echo "<li> <a href='bookings.php'>Manage your bookings</a> </li>";
}
echo "</ul>";
echo "</nav>";
echo "</div>";
?>