<?php

// 4 variabile de conectare la baza de date
$servername = "localhost:3306";
$username = "root";
$password = "Addaprilie20";
$dbname = "Spital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>