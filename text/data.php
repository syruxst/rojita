<?php
$charset = "utf8";
$collation = "utf8_spanish_ci";

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "rojita"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset($charset);
$conn->query("SET NAMES '$charset' COLLATE '$collation'");
?>
