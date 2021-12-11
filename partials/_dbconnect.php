<?php
$server = "localhost";
$username = "root";
$password = "123QWEasd";
$database = "opd";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
