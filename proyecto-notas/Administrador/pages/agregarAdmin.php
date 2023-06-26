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
        <form action="..\controladores\agregarUsuario.php" method="POST">
            <h2>Registrar Administrador</h2>
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
            <label for="NombreUsu">Nombre de usuario: </label>
            <input type="text" name="usuario">
            <br>
            </div>
            <div class="inputbox">Perfil:</label>
                <label for="perfil">
                    <select name="txtperfil" >
                    <option ></option>
                        <option>Administrador</option>
                        <option>Docente</option>
                    </select>
                
            </div>
            <div class="inputbox">
                <label for="perfil">Estado</label>
                    <select name="txtestado" >
                        <option ></option>
                        <option value="">Activo</option>
                        <option value="">Inactivo</option>
                    </select>
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