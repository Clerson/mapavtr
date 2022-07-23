<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mapavtr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Falha de conexão: " . $conn->connect_error);
}

?>