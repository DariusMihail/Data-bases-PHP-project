<?php
include_once 'db_connect.php';
$sql = "DELETE FROM PacientDoctor WHERE PacientID='" . $_GET["PacientID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>