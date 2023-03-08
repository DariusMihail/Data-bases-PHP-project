<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #ADD8E6;
    }
    a {
      font-weight: bold;
      font-size: 20px;
      margin-left: 10px;
      border: 2px solid black;
      border-radius: 5px;
      padding: 3px;
    }
  </style>
</head>
<body>
  <a href="\ProiectBD\tabele\pacient_doctor.php">Inapoi</a>
  
</body>
</html>

<?php 

include "db_connect.php";

// Campuri de adaugare pacienti

$doctorNou = $_GET["doctor_nou"];
$pacientNou = $_GET["pacient_nou"];
$nrconsultatiiNou = $_GET["nrconsultatii_nou"]; 


echo "<h1> Adaugare camp nou in Pacient-Dctor</h1>";

$sql = "INSERT INTO PacientDoctor VALUES ('$nrconsultatiiNou', '$pacientNou', '$nrconsultatiiNou')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }        

?>
