<?php
include("conexion.php");

$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];

$sql = "DELETE FROM personajes WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    http_response_code(200);
    echo json_encode(["mensaje" => "Personaje eliminado"]);
} else {
    http_response_code(404);
    echo json_encode(["error" => "No encontrado"]);
}
?>