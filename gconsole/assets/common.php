<?php

function new_console($conn, $post){
    try{
        $sql = "INSERT into console (manufacturer, c_name, release_date, controller_no, bit) VALUES (?, ?, ?, ?, ?)";  // We are doing a prepared statement where we send the statement and the data separately to prevent sql injections
        $stmt = $conn->prepare($sql); // prepares it to sql

        $stmt->bindParam(1, $post['manufacturer']);  // Bind parameters for security
        $stmt->bindParam(2, $post['c_name']);  // Binds the data from my form to my sql statement, this makes it more secure from an sql injection attack and means people are less likely to hijack our sql statement
        $stmt->bindParam(3, $post['release_date']);
        $stmt->bindParam(4, $post['controller_no']);
        $stmt->bindParam(5, $post['bit']);

        $stmt->execute();  // runs the query and executes
        $conn = null;  // Closes the connection so it cant be abused
    } catch (PDOException $e) {  // Handles all potential database errors
        error_log("Audit Database Error" . $e->getMessage());  // This will log the error that has occurred
        throw new Exception("Auditing Database Error: " . $e);
    } catch (Exception $e){
        error_log("Audit Error" . $e->getMessage());  // Logs the error
        throw new Exception("Auditing Error: " . $e->getMessage());
    }
}

function user_message(){
    if(isset($_SESSION['usermessage'])){
        $message = "<p>".$_SESSION['usermessage']."</p>";
        unset($_SESSION['usermessage']);
        return $message;
    } else{
        echo "";
    }
}