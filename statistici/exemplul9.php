<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplul 8</title>

    <!-- Adaugare CSS-->
    <link rel="stylesheet" href="\ProiectBD\style.css">

    <!-- Adaugare Navbar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

   
</head>
</html>

<?php

include 'db_connect.php';

$query = "SELECT YEAR(Data) as An, COUNT(*) as NumarConsultatii
FROM Consultatii  
GROUP BY YEAR(Data)
HAVING COUNT(YEAR(Data)) >= ALL (SELECT COUNT(YEAR(C.Data))
                  FROM Consultatii C
                  GROUP BY YEAR(C.Data)
                  ORDER BY YEAR(C.Data))";
$result = mysqli_query($conn, $query);

echo "<center>";
echo "<h1> Enunt: Selectati anul cu cele mai multe consultatii";
echo "<hr/>";

echo "<table border = '1' class=" . "content-table" . ">";
echo"<thead>
    <tr>
        <th>An</th>
        <th>NumarConsultatii</th>
    </tr>
    </thead>";

    echo "<tbody>";    
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['An'] . "</td>";
        echo "<td>" . $row['NumarConsultatii'] . "</td>";
        echo "<tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</center>";

?>