<?php
session_start();
session_destroy();
header("Location: passcheck.php"); // Change to your filename
exit;
