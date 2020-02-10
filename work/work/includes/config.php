<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', true);

//Inloggegevens van en naar de database
$DB_hostname = "localhost";
$DB_username = "root";
$DB_password = "";
$DB_database = "work";

$mysqli = mysqli_connect($DB_hostname, $DB_username, $DB_password, $DB_database);

if (!$mysqli) {
    echo "Fout, geen connectie naar de database.";
    //error_log("Error", 1, "Includes/error.log");
}

