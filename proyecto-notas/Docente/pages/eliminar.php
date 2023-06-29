<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Eliminar Docente</title>
</head>
<body>
    <div class="contenedor">
        
    <form action="../controladores/eliminarDocente.php" method="POST">
    <h2>Eliminar docente</h2>
    <label for="id">Id del Docente</label>
    <input type="text" name="ID">
    <input type="submit" class="boton">
    </form>
    </div>
</body>
</html>