<?php

function dbconnect_insert(){

    $servername = "localhost";  // Sets Server name;  Should not be stored here at all

    $dbusername = "root";  // Had to change this variable name as it fought against;    Should not be stored here at all

    $dbpassword = "";  // Password for database useraccount;     Should not be stored here at all

    $dbname = "gconsole";  // Dtabase name to connect to; Should not be stored here at all

    try {  // Attempt this block of code, catching an error
        $conn = new PDO("mysql:host=$servername; port: 3306; dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        error_log("Database Connection Failed: " . $e->getMessage());

        throw $e;
    }
}
