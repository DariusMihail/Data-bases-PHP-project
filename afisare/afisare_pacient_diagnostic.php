<!-- Parte de html doar pentru CSS -->

<!DOCTYPE html>
<html>
  <head>
    <style>
      <?php include 'style.css'; ?>
    </style>
  </head>
</html>

<?php

// Colectare de date
$sql = "SELECT * FROM PacientDiagnostic";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
    echo "<table class=" . "content-table" . ">";
    echo "<thead>";
    echo "<tr> <th> Numar Diagnostice </th>";
    echo "<th> PacientID </th>";
    echo "<th> DiagnosticID </th>";
    echo "<th> Update </th>";  
    echo "<th> Delete </th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["NumarDiagnostice"] . "</td>" ;
    echo "<td>" . $row["PacientID"] . "</td>" ;
    echo "<td>" . $row["DiagnosticID"] . "</td>" ;
    //aici trebuie sa modific
    echo "<td>" . "<a href=" . "/ProiectBD/update_date/update_pacient_diagnostic.php?PacientID=" . $row["PacientID"] . ";>" . "Update</a></td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/delete_date/delete_pacient_diagnostic.php?PacientID=" . $row["PacientID"] . ";>" . "Delete</a></td>" ;
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "Nu s-au afisat datele!";
}

?>