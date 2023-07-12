
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="contenedor">
    <h2>Inicia sesión</h2>
    <form action="Usuarios/modelos/ControlUsuarios.php" method ="POST">
        <label for="Usuario">Nombre apellido </label>
        <input type="text" name="Usuario">
        <br>
        <label for="Contrasena">Contraseña: </label>
        <input type="password" name ="Contrasena">
        <a href="#">Contraseña olvidada</a>
        <input type="submit" value="Iniciar Sesion">
    </form>
    </div>
</body>
</html>
