<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Adaugare CSS-->
    <link rel="stylesheet" href="\ProiectBD\style.css">

    <style>
        a {
          font-weight: bold;
          font-size: 20px;
          margin-left: 10px;
          border: 2px solid black;
          border-radius: 5px;
          padding: 3px;
          float: left;
        }

        h1 {
          font-size: 40px;
          margin-top: 80px;
          margin-left: 40%;
          position: absolute;
        }
    </style>


</head>
<body>

        <!-- Buton de back -->
        <a href="\ProiectBD\tabele\sectie.php">Inapoi</a>
    
   
    
</body>
</html>


<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
  // (B1) SEARCH FOR USERS
  require "pacienti-search.php";

  echo "<table class=" . "content-table" . ">";
    echo "<thead>";
    echo "<tr>";
    echo "<th> PacientID </th> <th> Nume </th>";
    echo "<th> Prenume </th> <th> Strada </th>";
    echo "<th> Numar </th> <th> Oras </th>";
    echo "<th> Judet </th> <th> Telefon </th>";
    echo "<th> CNP </th> <th> Data Nasterii </th>";
    echo "<th> Sex </th> <th> Cod Asigurare </th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
   // printf("<div>%s - %s</div> - %s</div>", $r["NumeSectie"], $r["DoctorID"],  $r["NumarPersonal"]);
    printf("<tr><td>%s</td>", $r["PacientID"]);
    printf("<td>%s</td>", $r["Nume"]);
    printf("<td>%s</td>", $r["Prenume"]);
    printf("<td>%s</td>", $r["Strada"]);
    printf("<td>%s</td>", $r["Numar"]);
    printf("<td>%s</td>", $r["Oras"]);
    printf("<td>%s</td>", $r["Judet"]);
    printf("<td>%s</td>", $r["Telefon"]);
    printf("<td>%s</td>", $r["CNP"]);
    printf("<td>%s</td>", $r["DataNasterii"]);
    printf("<td>%s</td>", $r["Sex"]);
    printf("<td>%s</td>", $r["CodAsigurare"]);

    printf("</tr>");
  }
  printf("</tbody></table>");
} else { echo "<td>No results found</td>"; }
}
?>