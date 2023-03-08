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

$query = "SELECT Nume, count(PacientID) as PersoaneDiagnosticate
          FROM Diagnostic D join PacientDiagnostic PD on D.DiagnosticID = PD.DiagnosticID
          WHERE Nume in ('Carenta in zinc', 'Boli şi tulburări ale ochiului')
          HAVING count(PacientID) >= 1
          ORDER BY count(PacientID) >= 1 ASC";

$result = mysqli_query($conn, $query);

echo "<center>";
echo "<h1> Enunt: Selectati cate diagnostice de tipul 'Carenta in zinc' sau
                'Boli şi tulburări ale ochiului' care au fost prescrise cel putin la un pacient</h1>";
echo "<hr/>";

echo "<table border = '1' class=" . "content-table" . ">";
echo"<thead>
    <tr>
        <th>Nume</th>
        <th>Persoane Diagnosticate</th>
    </tr>

    </thead>";

    echo "<tbody>";   
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['Nume'] . "</td>";
        echo "<td>" . $row['PersoaneDiagnosticate'] . "</td>";
        echo "<tr>";
    }

    echo "</tbody>";  
    echo "</table>";
    echo "</center>";

?>