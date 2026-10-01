<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $grado = $_POST["grado"];
    $grupo = $_POST["grupo"];

    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', apellido='$apellido', numero= '$numero', grado= '$grado', grupo= '$grupo' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al actualizar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>
