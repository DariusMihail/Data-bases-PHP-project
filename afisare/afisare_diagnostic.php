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
$sql = "SELECT * FROM Diagnostic";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
    echo "<table class=" . "content-table" . ">";
    echo "<thead>";
    echo "<tr> <th> DiagnosticID </th>";
    echo "<th> Nume </th>";
    echo "<th> Descriere </th>";
    echo "<th> Update </th>";  
    echo "<th> Delete </th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["DiagnosticID"] . "</td>" ;
    echo "<td>" . $row["Nume"] . "</td>" ;
    echo "<td>" . $row["Descriere"] . "</td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/update_date/update_diagnostic.php?DiagnosticID=" . $row["DiagnosticID"] . ";>" . "Update</a></td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/delete_date/delete_diagnostic.php?DiagnosticID=" . $row["DiagnosticID"] . ";>" . "Delete</a></td>" ;
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "Nu s-au afisat datele!";
}

?>