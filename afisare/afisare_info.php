<!-- Parte de html doar pentru CSS -->

<!DOCTYPE html>
<html>
  <head>
    <style>
      <?php include 'style.css'; ?>

      #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 40%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        margin-left: 20px;
  }

    </style>
  </head>

  <body>


<?php

// Colectare de date
$sql = "SELECT * FROM Pacienti";
$result = $conn->query($sql);

//pentru cautare
/* $con = new PDO('mysql:host=localhost:3306;dbname=Spital','root','Addaprilie20');
if (isset($_POST["submit"])) {
  $str = $_POST["search"];
  $sth = $con->prepare("SELECT * FROM 'Pacienti' WHERE name = '$str'");

  $sth->setFetchMode(PDO::FETCH_OBJ);
  $sth->execute();

  if($row = $sth->fetch()) {

    ?>

    <br><br><br>
    <?php 
  }


  else {
    echo "string does not exist";
  }
} */

if ($result->num_rows > 0) {
  // output data of each row
    echo "<table class=" . "content-table" . " id = " . "myTable" . ">";
    echo "<thead>";
    echo "<tr> <th> PacientID </th> <th> Nume </th>";
    echo "<th> Prenume </th> <th> Strada </th>";
    echo "<th> Numar </th> <th> Oras </th>";
    echo "<th> Judet </th> <th> Telefon </th>";
    echo "<th> CNP </th> <th> Data Nasterii </th>";
    echo "<th> Sex </th> <th> Cod Asigurare </th>";
    echo "<th> Update </th>";  
    echo "<th> Delete </th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["PacientID"] . "</td>" ;
    echo "<td>" . $row["Nume"] . "</td>" ;
    echo "<td>" . $row["Prenume"] . "</td>" ;
    echo "<td>" . $row["Strada"] . "</td>" ;
    echo "<td>" . $row["Numar"] . "</td>" ;
    echo "<td>" . $row["Oras"] . "</td>" ;
    echo "<td>" . $row["Judet"] . "</td>" ;
    echo "<td>" . $row["Telefon"] . "</td>" ;
    echo "<td>" . $row["CNP"] . "</td>" ;
    echo "<td>" . $row["DataNasterii"] . "</td>" ;
    echo "<td>" . $row["Sex"] . "</td>" ;
    echo "<td>" . $row["CodAsigurare"] . "</td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/update_date/update_pacient.php?PacientID=" . $row["PacientID"] . ";>" . "Update</a></td>" ;
    echo "<td>" . "<a href=" . "/ProiectBD/delete_date/delete_pacient.php?PacientID=" . $row["PacientID"] . ";>" . "Delete</a></td>" ;
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "Nu s-au afisat datele!";
}

?>

</script>

</body>

</html>