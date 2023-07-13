
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="contenedor">
    <form action="Usuarios/controladores/controlUsuario.php" method ="POST">
    <h2>Inicia sesión</h2>
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
