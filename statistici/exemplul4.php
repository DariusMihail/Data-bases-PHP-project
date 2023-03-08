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

$query = "SELECT Data, Examinare, PrescriptieMedicala
          FROM Consultatii C join DiagnosticConsultatie D on D.ConsultatieID = C.ConsultatieID
          WHERE year(Data) = 2022 AND Examinare IN ('Pacientul prezinta dureri in zona toracelui')
          ORDER BY Examinare DESC";

$result = mysqli_query($conn, $query);

echo "<center>";
echo "<h1> Enunt: Selectati toate consultatiile din anul 2022 si care au ca examinare cuvantul 'Pacientul prezinta dureri in zona toracelui' </h1>";
echo "<hr/>";

echo "<table border = '1' class=" . "content-table" . ">";
echo"<thead>
    <tr>
        <th>Data</th>
        <th>Examinare</th>
        <th>Prescriptie Medicala</th>
    </tr>

    </thead>";

    echo "<tbody>";  
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['Data'] . "</td>";
        echo "<td>" . $row['Examinare'] . "</td>";
        echo "<td>" . $row['PrescriptieMedicala'] . "</td>";
        echo "<tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</center>";

?>