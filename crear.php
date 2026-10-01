<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="guardar.php" method="post">
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
 
        <input type="submit" value="Guardar">
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>
