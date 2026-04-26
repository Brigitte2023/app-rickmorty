<?php
include("conexion.php");

$sql = "SELECT * FROM personajes";
$result = $conn->query($sql);

$personajes = array();

while($row = $result->fetch_assoc()) {
    $personajes[] = $row;
}

echo json_encode($personajes);
?>