<?php
$servername = "localhost";
$username = "root";
$password = "";
$baza = "biblioteka";

$connection = new mysqli($servername, $username, $password, $baza);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>