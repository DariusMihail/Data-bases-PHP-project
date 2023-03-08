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
$sql = "SELECT * FROM Doctori";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
    echo "<table class=" . "content-table" . ">";
    echo "<thead>";
    echo "<tr> <th> DoctorID </th> ";
    echo "<th> Nume </th>";
    echo "<th> Prenume </th>";
    echo "<th> Strada </th>";
    echo "<th> Numar </th>";
    echo "<th> Oras </th>";
    echo "<th> Judet </th>";
    echo "<th> CNP </th>";
    echo "<th> Telefon </th>";
    echo "<th> Data Nasterii </th>";
    echo "<th> Update </th>";  
    echo "<th> Delete </th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["DoctorID"] . "</td>" ;
    echo "<td>" . $row["Nume"] . "</td>" ;
    echo "<td>" . $row["Prenume"] . "</td>" ;
    echo "<td>" . $row["Strada"] . "</td>" ;
    echo "<td>" . $row["Numar"] . "</td>" ;
    echo "<td>" . $row["Oras"] . "</td>" ;
    echo "<td>" . $row["Judet"] . "</td>" ;
    echo "<td>" . $row["CNP"] . "</td>" ;
    echo "<td>" . $row["Telefon"] . "</td>" ;
    echo "<td>" . $row["DataNasterii"] . "</td>" ;
    //aici trebuie modificat
    echo "<td>" . "<a href=" . "/ProiectBD/update_date/update_doctori.php?DoctorID=" . $row["DoctorID"] . ";>" . "Update</a></td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/delete_date/delete_doctori.php?DoctorID=" . $row["DoctorID"] . ";>" . "Delete</a></td>" ;
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "Nu s-au afisat datele!";
}

?>