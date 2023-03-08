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

$query = "SELECT YEAR(DataNasterii) as An, COUNT(DoctorID) as NumarDoctori
FROM Doctori  
GROUP BY YEAR(DataNasterii)
HAVING COUNT(YEAR(DataNasterii)) >= ALL (SELECT COUNT(YEAR(D.DataNasterii))
                  FROM Doctori D
                  GROUP BY YEAR(D.DataNasterii)
                  ORDER BY YEAR(D.DataNasterii))";
$result = mysqli_query($conn, $query);

echo "<center>";
echo "<h1> Enunt: Selectati anul in care s-au nascut cei multi medici";
echo "<hr/>";

echo "<table border = '1' class=" . "content-table" . ">";
echo"<thead>
    <tr>
        <th>An</th>
        <th>NumarDoctori</th>
    </tr>
    </thead>";

    echo "<tbody>";    
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['An'] . "</td>";
        echo "<td>" . $row['NumarDoctori'] . "</td>";
        echo "<tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</center>";

?>