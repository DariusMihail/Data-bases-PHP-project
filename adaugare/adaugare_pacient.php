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
  <a href="\ProiectBD\tabele\pacienti.php">Inapoi</a>
  
</body>
</html>

<?php 

include "db_connect.php";

// Campuri de adaugare pacienti

$numeNou = $_GET["nume_nou"];
$prenumeNou = $_GET["prenume_nou"];
$stradaNou = $_GET["strada_nou"]; 
$numarNou = $_GET["numar_nou"];
$orasNou = $_GET["oras_nou"];
$judetNou = $_GET["judet_nou"];
$telefonNou = $_GET["telefon_nou"];
$cnpNou = $_GET["CNP_nou"];
$datanNou = $_GET["datan_nou"];
$sexNou = $_GET["sex_nou"];
$codasigNou = $_GET["codasig_nou"];

// echo $keywordfromfrom;

echo "<h1> Adaugare pacient nou: $numeNou $prenumeNou </h1>";

$sql = "INSERT INTO Pacienti VALUES (NULL, '$numeNou', '$prenumeNou', '$stradaNou',
        '$numarNou', '$orasNou', '$judetNou', '$telefonNou', '$cnpNou', '$datanNou', '$sexNou', '$codasigNou')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }        

?>
