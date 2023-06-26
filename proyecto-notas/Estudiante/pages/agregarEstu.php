<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estuAgr.css">
    <title>Document</title>
</head>
<body>
<div class="contenedor">
        <form action="..\controladores\agregarEstudiante.php" method="POST">
            <h2>Registrar Estudiante</h2>
            <div class="inputbox">
            <label for="Nombre">Nombre: </label>
            <input type="text" name="nombre">
            <br>
            </div>
            <div class="inputbox">
            <label for="Apellido">Apellido: </label>
            <input type="text" name="apellido">
            <br>
            </div>
            <div class="inputbox">
            <label for="Documento">Documento </label>
            <input type="text" name="documento">
            <br>
            </div>
            <div class="inputbox">
            <label for="Materia">Materia</label>
            <input type="text" name="materia">
            <br>
            </div>
            <div class="inputbox">
            <label for="Docente">Docente</label>
            <input type="text" name="docente">
            <br>
            </div>
            <div class="inputbox">
            <label for="fecha">Fecha de registro </label>
            <input type="date" name="fecha">
            <br>
            </div>
            <div class="inputbox">
            <label for="Correo">Correo</label>
            <input type="email" name="correo">
            <br>
            </div>
            <div class="inputbox">
            <label for="Contraseña">Contraseña </label>
            <input type="password" name="contrasena">
            <br>
            <input type="submit" class="boton">
            </div>
        </form>
    </div>
</body>
</html>