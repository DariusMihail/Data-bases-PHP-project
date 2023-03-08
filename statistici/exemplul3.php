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

$query = "SELECT NumeSectie, NumarPersonal, Nume, Prenume
          FROM Sectie S join Doctori D on D.DoctorID = S.DoctorID
          WHERE NumarPersonal > 25 AND Nume IN ('Vladislav', 'Radu')
          GROUP BY NumeSectie";

$result = mysqli_query($conn, $query);

echo "<center>";
echo "<h1> Enunt: Selectati sectia care are minimum 25 de angajati, iar numele doctorului
                  este 'Vladislav' sau 'Radu' </h1>";
echo "<hr/>";

    echo "<table border = '1' class=" . "content-table" . ">";
    echo"<thead>
    <tr>
        <th>NumeSectie</th>
        <th>NumarPersonal</th>
        <th>Nume</th>
        <th>Preume</th>
    </tr>

    </thead>";

    echo "<tbody>";    
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['NumeSectie'] . "</td>";
        echo "<td>" . $row['NumarPersonal'] . "</td>";
        echo "<td>" . $row['Nume'] . "</td>";
        echo "<td>" . $row['Prenume'] . "</td>";
        echo "<tr>";
    }

    echo "</tbody>"; 
    echo "</table>";
    echo "</center>";

?>