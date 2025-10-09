<?php

session_start();

require('assets/common.php');
require('assets/dbcon.php');

auditor(dbconnect_insert(), $_SESSION['userid'], "lout", "User has Logged Out ");
session_destroy();
header("location: index.php?message=You have been logged out");