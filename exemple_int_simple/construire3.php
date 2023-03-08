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

$sql = "SELECT NumeSectie, NumarPersonal
        FROM Sectie S 
        WHERE $selectNou1 > (SELECT count(*)
          FROM Sectie 
          WHERE S.NumarPersonal < NumarPersonal)
        ";

$result = $conn->query($sql); 
  
  // Afisare informatii

  if($result->num_rows > 0)
{
    // output data of each row
    echo "<table>";
    echo "<th> Nume Sectie </th>";
    echo "<th> Numar Personal </th>";
    echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["NumeSectie"] . "</td>" ;
    echo "<td>" . $row["NumarPersonal"] . "</td>" ;
    echo "</tr>";
    }
    echo "</table>";
}

else
{
    echo "Nu s-au afisat datele!";
}

?>
