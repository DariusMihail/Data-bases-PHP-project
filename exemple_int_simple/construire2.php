<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Adaugare CSS-->
  <link rel="stylesheet" href="\ProiectBD\style.css">

</head>
<body>
  
</body>
</html>


<?php 

include "db_connect.php";

// Campuri de adaugare pacienti

$selectNou1 = $_GET["select1"];


// echo $keywordfromfrom;

echo "<h1> Interogarea simpla executata de dumneavoastra: </h1>";

$sql = "SELECT P.Nume, P.Prenume, PD.NumarConsultatii
FROM Pacienti P join PacientDoctor PD on P.PacientID = PD.PacientID
WHERE PD.NumarConsultatii > $selectNou1 AND P.Nume in ('Vasile', 'Tunaru')
ORDER BY NumarConsultatii ASC ";

$result = $conn->query($sql); 
  
  // Afisare informatii

  if($result->num_rows > 0)
{
    // output data of each row
    echo "<table>";
    echo "<tr> <th> Nume </th>";
    echo "<th> Prenume</th>";
    echo "<th> NrConsultatii </th>";
    echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<td>" . $row['Nume'] . "</td>";
    echo "<td>" . $row['Prenume'] . "</td>";
    echo "<td>" . $row['NumarConsultatii'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}

else
{
    echo "Nu s-au afisat datele!";
}

?>
