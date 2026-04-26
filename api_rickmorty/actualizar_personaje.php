<?php
include("conexion.php");

$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];
$nombre = $data["nombre"];
$especie = $data["especie"];
$estado = $data["estado"];
$imagen = $data["imagen"];

$sql = "UPDATE personajes 
SET nombre='$nombre', especie='$especie', estado='$estado', imagen='$imagen' 
WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    http_response_code(200);
    echo json_encode(["mensaje" => "Personaje actualizado"]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Error al actualizar"]);
}
?>