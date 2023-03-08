<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplul 1</title>

    <!-- Adaugare CSS-->
    <link rel="stylesheet" href="\ProiectBD\style.css">

    <!-- Adaugare Navbar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

   
</head>
</html>

<?php

include 'db_connect.php';

$query = "SELECT NumeSectie, NumarPersonal
          FROM Sectie S 
          WHERE 3 > (SELECT count(*)
                    FROM Sectie 
                    WHERE S.NumarPersonal < NumarPersonal)";
$result = mysqli_query($conn, $query);

echo "<center>";
echo "<h1> Enunt: Selectati primele 3 sectii cu cel mai mare numar de personal";
echo "<hr/>";

echo "<table border = '1' class=" . "content-table" . ">";
echo"<thead>
    <tr>
        <th>NumeSectie</th>
        <th>NumarPersonal</th>
    </tr>
    </thead>";

    echo "<tbody>";    
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['NumeSectie'] . "</td>";
        echo "<td>" . $row['NumarPersonal'] . "</td>";
        echo "<tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</center>";

?>