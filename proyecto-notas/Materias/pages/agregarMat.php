<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Agregar</title>
</head>
<body>
    <div class="contenedor">
        <form action="..\controladores\agregarMateria.php" method="POST">
            <h2>Registrar materias</h2>
            <div class="inputbox">
            <label for="Contraseña">Nombre materia</label>
            <input type="text" name="nombreMa">
            <br>
            <input type="submit" class="boton">
            </div>
        </form>
    </div>
</body>
</html>