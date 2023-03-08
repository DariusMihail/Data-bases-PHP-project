<?php 

include "db_connect.php";

// Campuri de adaugare pacienti

$selectNou1 = $_GET["select1"];
$selectNou2 = $_GET["select2"];
$selectNou3 = $_GET["select3"];
$fromNou = $_GET["from"];
$whereNou = $_GET["where"]; 
$selectNou12 = $_GET["select12"];
$fromNou2 = $_GET["from2"];
$whereNou2 = $_GET["where2"]; 


// echo $keywordfromfrom;

echo "<h1> Interogarea simpla executata de dumneavoastra: </h1>";

$sql = "SELECT $selectNou1, $selectNou2, $selectNou3
        FROM $fromNou 
        WHERE $whereNou 
        ( SELECT $selectNou12
        FROM $fromNou2 
        WHERE $whereNou2";

$result = $conn->query($sql); 
  
  // Afisare informatii

  if($result->num_rows > 0)
{
    // output data of each row
    echo "<table>";
    echo "<tr> <th> " . $selectNou1 . " </th>";
    echo "<tr> <th> " . $selectNou2 . " </th>";
    echo "<tr> <th> " . $selectNou3 . " </th>";
    echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["$selectNou1"] . "</td>" ;
    echo "<tr><td>" . $row["$selectNou2"] . "</td>" ;
    echo "<tr><td>" . $row["$selectNou3"] . "</td>" ;
    echo "</tr>";
    }
    echo "</table>";
}

else
{
    echo "Nu s-au afisat datele!";
}

?>
