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
$sql = "SELECT * FROM Sectie";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
    echo "<table class=" . "content-table" . ">";
    echo "<thead>";
    echo "<tr> <th> SectieID </th>";
    echo "<th> Nume Sectie </th>";
    echo "<th> DoctorID </th>";
    echo "<th> Numar personal </th>";
    echo "<th> Update </th>";  
    echo "<th> Delete </th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["SectieID"] . "</td>" ;
    echo "<td>" . $row["NumeSectie"] . "</td>" ;
    echo "<td>" . $row["DoctorID"] . "</td>" ;
    echo "<td>" . $row["NumarPersonal"] . "</td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/update_date/update_sectie.php?SectieID=" . $row["SectieID"] . ";>" . "Update</a></td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/delete_date/delete_sectie.php?SectieID=" . $row["SectieID"] . ";>" . "Delete</a></td>" ;
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "Nu s-au afisat datele!";
}

?>