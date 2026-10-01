<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php
    include 'conexion.php';

    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nombre = $row["nombre"];
            $apellido= $row["apellido"];
            $email = $row["email"];
            $grado= $row["grado"];
            $grupo= $row["grupo"];

        } else {
            echo "Usuario no encontrado.";
            exit;
        }
    } else {
        echo "ID de usuario no especificado.";
        exit;
    }
    ?>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
              <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="numero">Numero de control:</label>
        <input type="password" id="numero" name="numero" required><br><br>

        <label for="email">Correo Institucional:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="grado">Grado:</label>
        <input type="number" id="grado" name="grado" required><br><br>

        <label for="grupo">Grupo:</label>
        <input type="text" id="grupo" name="grupo" required><br><br>
        <input type="submit" value="Actualizar">
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>
