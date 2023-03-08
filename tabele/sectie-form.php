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
  require "sectie-search.php";

  echo "<table class=" . "content-table" . ">";
    echo "<thead>";
    echo "<tr>";
    echo "<th> Nume Sectie </th>";
    echo "<th> DoctorID </th>";
    echo "<th> Numar personal </th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
   // printf("<div>%s - %s</div> - %s</div>", $r["NumeSectie"], $r["DoctorID"],  $r["NumarPersonal"]);
    printf("<tr><td>%s</td>", $r["NumeSectie"]);
    printf("<td>%s</td>", $r["DoctorID"]);
    printf("<td>%s</td>", $r["NumarPersonal"]);
    printf("</tr>");
  }
  printf("</tbody></table>");
} else { echo "<td>No results found</td>"; }
}
?>