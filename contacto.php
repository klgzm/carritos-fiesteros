<?php
include("db.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$tipo_evento = $_POST['tipo_evento'];
$tematica = $_POST['tematica'];
$dudas = $_POST['dudas'];

$sql = "INSERT INTO mensajes (nombre, telefono, correo, tipo_evento, tematica, dudas)
        VALUES ('$nombre', '$telefono', '$correo', '$tipo_evento', '$tematica', '$dudas')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('¡Formulario enviado con éxito!'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
