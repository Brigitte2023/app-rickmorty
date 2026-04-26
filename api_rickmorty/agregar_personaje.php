<?php
include("conexion.php");

$data = json_decode(file_get_contents("php://input"), true);

$nombre = $data["nombre"];
$especie = $data["especie"];
$estado = $data["estado"];
$imagen = $data["imagen"];

$sql = "INSERT INTO personajes (nombre, especie, estado, imagen)
VALUES ('$nombre', '$especie', '$estado', '$imagen')";

if ($conn->query($sql) === TRUE) {
    http_response_code(201);
    echo json_encode(["mensaje" => "Personaje agregado"]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Error al agregar"]);
}
?>