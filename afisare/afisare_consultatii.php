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

//Colectare de date
$sql = "SELECT * FROM Consultatii";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    // output data of each row
    echo "<table class=" . "content-table" . ">";
    echo "<thead>";
      echo "<tr> <th> ConsultatieID </th>";
           echo "<th> Data </th>";
           echo "<th> Examinare </th>";
           echo "<th> PacientID </th>";
           echo "<th> DoctorID </th>";
           echo "<th> Update </th>";  
           echo "<th> Delete </th>";
      echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["ConsultatieID"] . "</td>" ;
    echo "<td>" . $row["Data"] . "</td>" ;
    echo "<td>" . $row["Examinare"] . "</td>" ;
    echo "<td>" . $row["PacientID"] . "</td>" ;
    echo "<td>" . $row["DoctorID"] . "</td>" ;
    // aici trebuie modificat
    echo "<td>" . "<a href=" . "/ProiectBD/update_date/update_consultatii.php?ConsultatieID=" . $row["ConsultatieID"] . ";>" . "Update</a></td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/delete_date/delete_consultatii.php?ConsultatieID=" . $row["ConsultatieID"] . ";>" . "Delete</a></td>" ;
    echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

else
{
    echo "Nu s-au afisat datele!";
}
?>
