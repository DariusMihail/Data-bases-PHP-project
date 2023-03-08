<?php 

include "db_connect.php";

// Campuri de adaugare pacienti

$selectNou1 = $_GET["select1"];
$selectNou2 = $_GET["select2"];
$selectNou3 = $_GET["select3"];
$selectNou4 = $_GET["select4"];
$fromNou = $_GET["from"];
$joinNou = $_GET["join"]; 
$whereNou = $_GET["where"];
$groupbyNou = $_GET["group_by"];
$havingNou = $_GET["having"];
$orderNou = $_GET["order_by"];

// echo $keywordfromfrom;

echo "<h1> Interogarea simpla executata de dumneavoastra: </h1>";

$sql = "SELECT $selectNou1, $selectNou2, $selectNou3, $selectNou4
        FROM $fromNou JOIN $joinNou
        where $whereNou
        GROUP BY $groupbyNou
        HAVING $havingNou
        ORDER BY $orderNou";

$result = $conn->query($sql); 
  
  // Afisare informatii

  if($result->num_rows > 0)
{
    // output data of each row
    echo "<table>";
    echo "<tr> <th> " . $selectNou1 . " </th>";
    echo "<tr> <th> " . $selectNou2 . " </th>";
    echo "<tr> <th> " . $selectNou3 . " </th>";
    echo "<tr> <th> " . $selectNou4 . " </th>";
    echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["$selectNou1"] . "</td>" ;
    echo "<tr><td>" . $row["$selectNou2"] . "</td>" ;
    echo "<tr><td>" . $row["$selectNou3"] . "</td>" ;
    echo "<tr><td>" . $row["$selectNou4"] . "</td>" ;
    echo "</tr>";
    }
    echo "</table>";
}

else
{
    echo "Nu s-au afisat datele!";
}

?>
