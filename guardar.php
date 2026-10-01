<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $grado = $_POST["grado"];
    $grupo = $_POST["grupo"];

    

    $sql = "INSERT INTO usuarios (nombre, apellido, numero, email, grado, grupo) VALUES ('$nombre', '$apellido', '$numero', '$email', '$grado', '$grupo' )";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al agregar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>
