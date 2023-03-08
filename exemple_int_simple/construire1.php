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

$sql = "SELECT Nume, count(PacientID) as PersoaneDiagnosticate
        FROM Diagnostic D join PacientDiagnostic PD on D.DiagnosticID = PD.DiagnosticID
        WHERE Nume in ('Carenta in zinc', 'Boli şi tulburări ale ochiului')
        HAVING count(PacientID) >= $selectNou1
        ORDER BY count(PacientID) ASC";
       

$result = $conn->query($sql); 
  
  // Afisare informatii

  if($result->num_rows > 0)
{
    // output data of each row
    echo "<table>";
    echo "<tr> <th> Nume ";
    echo "<th> Persoane Diagnosticate </th>";
    echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Nume"] . "</td>" ;
    echo "<td>" . $row["PersoaneDiagnosticate"] . "</td>" ;
    echo "</tr>";
    }
    echo "</table>";
}

else
{
    echo "Nu s-au afisat datele!";
}

?>
