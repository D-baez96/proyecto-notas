<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/stylesAdmin.css">
    <title>Admin Navbar</title>
</head>
<body>
    <nav class="container">
        <div class ="text">
            <h1>Administrador 🤯</h1>
        </div>
        <ul class="navbar">
            
            <li><a href="#">Materias</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="#">Docentes</a></li>
            <li><a href="#">Estudiantes</a></li>
            <button class = "btn">Cerrar Sesion</button>
        </ul>
    </nav>
    <div class="div-container">
        <form action="" class="form-container">
            <label for="nombre" >Nombre</label>
            <input type="text" placeholder="Nombre">
            <br>
            <label for="apellido">Apellido</label>
            <input type="text" placeholder="Apellido">
            <br>
            <label for="usuario">Usuario</label>
            <input type="text" placeholder="Usuario">
            <br>
            <label for="contraseña">Contraseña</label>
            <input type="password" placeholder="Contraseña">
            <br>
            <label for="perfil">Perfil</label>
            <input type="text" placeholder="Perfil">
            <br>
            <label for="estado">Estado</label>
            <input type="text" placeholder="Estado">
            <br>
            <button class="btn-form">Editar</button>
        </form>
    </div>
</body>
</html>