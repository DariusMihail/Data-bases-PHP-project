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

$query = "SELECT P.Nume, P.Prenume, PD.NumarConsultatii
          FROM Pacienti P join PacientDoctor PD on P.PacientID = PD.PacientID
          WHERE PD.NumarConsultatii > 2 AND P.Nume in ('Vasile', 'Tunaru')
          ORDER BY NumarConsultatii ASC";

$result = mysqli_query($conn, $query);

echo "<center>";
echo "<h1> Enunt: Selectati toti pacientii cu numele 'Vasile' sau 'Tunaru' care au avut minimum 2 
                    consultatii </h1>";
echo "<hr/>";

echo "<table border = '1' class=" . "content-table" . ">";
echo"<thead>
    <tr>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Numar Consultatii</th>
    </tr>

    </thead>";

    echo "<tbody>";   
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['Nume'] . "</td>";
        echo "<td>" . $row['Prenume'] . "</td>";
        echo "<td>" . $row['NumarConsultatii'] . "</td>";
        echo "<tr>";
    }

    echo "</tbody>";  
    echo "</table>";
    echo "</center>";

?>