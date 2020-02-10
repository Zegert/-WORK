<?php
require './includes/config.php';

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
$query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
if ($result = $mysqli->query($query)) {
    echo "Returned rows are: " . $result . "<br>";
    header('Location:index.php');
} else {
    echo 'fail <br/>';
    echo "query: " . $query . "<br/>";
    echo $mysqli->error;
}



